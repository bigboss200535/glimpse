<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();

       foreach (range(1, 50) as $index) {
            DB::table('users')->insert([
            'UserId' => $faker->randomNumber(10, true),
            'Title' => $faker->title(),
            'Firstname' => $faker->firstName(),
            'Lastname' => $faker->lastName(),
            // 'UserId' => $faker->unique()->safeEmail,
            'Email' => $faker->unique()->safeEmail(),
            'Telephone' => $faker->e164PhoneNumber(),
            'Address' => $faker->streetAddress(),
            'DOB' => $faker->date(),
            'Password' => bcrypt('password'),
            ]);
    }
}
