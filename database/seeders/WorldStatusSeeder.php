<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class WorldStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countriesArray = ['Algeria', 'Bahrain', 'Djibouti', 'Egypt', 'Iraq', 'Jordan', 'Kuwait', 'Lebanon', 'Libya', 'Morocco', 'Mauritania', 'Oman', 'Palestinian Territory Occupied', 'Qatar', 'Saudi Arabia', 'Sudan', 'Syria', 'Tunisia', 'Yemen'];
        
        // Update countries status
        $updatedCountries = Country::whereIn('name', $countriesArray)->update(['status' => true]);
        $this->command->info("Updated {$updatedCountries} countries status to active");

        // Update states status for active countries
        $updatedStates = State::whereIn('country_id', function($query) use ($countriesArray) {
            $query->select('id')
                  ->from('countries')
                  ->whereIn('name', $countriesArray)
                  ->where('status', 1);
        })->update(['status' => true]);
        $this->command->info("Updated {$updatedStates} states status to active");

        // Update cities status for active states
        $updatedCities = City::whereIn('state_id', function($query) use ($countriesArray) {
            $query->select('states.id')
                  ->from('states')
                  ->join('countries', 'states.country_id', '=', 'countries.id')
                  ->whereIn('countries.name', $countriesArray)
                  ->where('countries.status', 1)
                  ->where('states.status', 1);
        })->update(['status' => true]);
        $this->command->info("Updated {$updatedCities} cities status to active");

        // Delete Israel
        $deletedIsrael = Country::where('name', 'Israel')->delete();
        $this->command->info("Deleted {$deletedIsrael} Israel records");

        $this->command->info('World status seeder completed successfully!');
    }
}
