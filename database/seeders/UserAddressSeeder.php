<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        $faker = Factory::create();

        $abdo = User::whereUsername('abdelmoneim')->first();

        if (! $abdo) {
            $this->command->warn('User "abdelmoneim" not found. Skipping address seeding.');
            Schema::enableForeignKeyConstraints();

            return;
        }

        $ksa = Country::with('states')->whereId(194)->first();
        $state = $ksa->states->random()->id;
        $city = City::whereStateId($state)->inRandomOrder()->first()->id;

        $abdo->addresses()->create([
            'address_title' => 'Home',
            'default_address' => true,
            'first_name' => 'Abdo',
            'last_name' => 'Belal',
            'email' => $faker->email,
            'mobile' => $faker->phoneNumber,
            'address' => $faker->address,
            'address2' => $faker->secondaryAddress,
            'country_id' => $ksa->id,
            'state_id' => $state,
            'city_id' => $city,
            'zip_code' => $faker->randomNumber(5),
            'po_box' => $faker->randomNumber(4),
        ]);

        $abdo->addresses()->create([
            'address_title' => 'Work',
            'default_address' => false,
            'first_name' => 'Abdo',
            'last_name' => 'Belal',
            'email' => $faker->email,
            'mobile' => $faker->phoneNumber,
            'address' => $faker->address,
            'address2' => $faker->secondaryAddress,
            'country_id' => 65,
            'state_id' => 3223,
            'city_id' => 31848,
            'zip_code' => $faker->randomNumber(5),
            'po_box' => $faker->randomNumber(4),
        ]);

        Schema::enableForeignKeyConstraints();

    }
}
