<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Users;
// use App\Models\UserInfo;
use Faker\Generator;
// use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'Firstname'        => $faker->firstName,
            'Lastname'         => $faker->lastName,
            'Gender'             => 'demo@demo.com',
            'password'          => Hash::make('demo'),
            // 'email_verified_at' => now(),
        ]);
    }
}
