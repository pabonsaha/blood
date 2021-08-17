<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $gender = $faker->randomElement(['male', 'female']);

    	foreach (range(1,200) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email,
                'password' => $faker->password(),
                
                'blood_group' => $faker->text(5),
                'address' => $faker->text(5),
                'phone_1' => $faker->phoneNumber,
                'phone_2' => $faker->phoneNumber,
                'last_donation_date' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
