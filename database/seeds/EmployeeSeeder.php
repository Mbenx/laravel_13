<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <= 27; $i++) {
            // $position = $i + 1;
            DB::table('employees')->insert([
            'name'     => $faker->name,
            'alamat'   => $faker->address,
            'phone'             => $faker->randomDigit,
            'email'            => $faker->safeEmail,
            'position_id'       => $faker->numberBetween($min = 1, $max = 7),
            ]);
        }
    }
}
