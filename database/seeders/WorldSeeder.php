<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql_file = public_path('course_ecommerce_world.sql');
        
        if (!file_exists($sql_file)) {
            $this->command->error("SQL file not found: {$sql_file}");
            return;
        }

        $this->command->info('Reading SQL file...');
        $sql = file_get_contents($sql_file);
        
        // Disable foreign key checks and set SQL mode
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";');
        
        try {
            // Remove comments and clean SQL
            $sql = preg_replace('/--.*$/m', '', $sql);
            $sql = preg_replace('/\/\*.*?\*\//s', '', $sql);
            $sql = preg_replace('/SET.*?;/i', '', $sql);
            $sql = preg_replace('/START TRANSACTION.*?;/i', '', $sql);
            $sql = preg_replace('/COMMIT.*?;/i', '', $sql);
            
            // Split SQL into individual statements
            $statements = array_filter(
                array_map('trim', explode(';', $sql)),
                function($statement) {
                    $statement = trim($statement);
                    return !empty($statement) && 
                           preg_match('/^INSERT INTO/i', $statement);
                }
            );

            $this->command->info('Found ' . count($statements) . ' INSERT statements to execute...');

            $successCount = 0;
            $errorCount = 0;

            foreach ($statements as $index => $statement) {
                if (!empty($statement)) {
                    try {
                        DB::unprepared($statement);
                        $successCount++;
                        
                        if (($index + 1) % 50 == 0) {
                            $this->command->info("Processed " . ($index + 1) . " statements (Success: {$successCount}, Errors: {$errorCount})...");
                        }
                    } catch (\Exception $e) {
                        $errorCount++;
                        if ($errorCount <= 5) { // Show only first 5 errors
                            $this->command->warn("Error in statement " . ($index + 1) . ": " . $e->getMessage());
                        }
                    }
                }
            }
            
            $this->command->info("Import completed! Success: {$successCount}, Errors: {$errorCount}");
            
        } catch (\Exception $e) {
            $this->command->error('Error importing world data: ' . $e->getMessage());
        } finally {
            // Re-enable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}
