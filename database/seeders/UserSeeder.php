<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1000; $i++) {
            // $truncatedUserId = substr($userId, 0, 20);
            DB::table('users')->insert([
                'UserId' => $faker->uuid,
                'Username' => $faker->userName,
                'Password' => bcrypt('password'),
                'Title' => $faker->title,
                'Firstname' => $faker->firstName,
                'Lastname' => $faker->lastName,
                'DOB' => $faker->date,
                'Address' => $faker->address,
                'Telephone' => $faker->phoneNumber,
                'Gender' => $faker->randomElement(['Male', 'Female']),
                'Email' => $faker->email,
                'Mode' => $faker->randomElement(['NEW USER', 'EXISTING USER']),
                'Role' => $faker->word,
                'Permission' => $faker->sentence,
                'Image' => $faker->imageUrl(),
                'AddedId' => $faker->uuid,
                'AddedDate' => $faker->dateTimeThisMonth(),
                'UpdatedDate' => $faker->dateTimeThisMonth(),
                'UpdatedId' => $faker->uuid,
                'UpdatedNotes' => $faker->sentence,
                'Status' => $faker->randomElement(['ACTIVE', 'INACTIVE']),
                'Archived' => $faker->randomElement(['YES', 'NO']),
                'ArchiveId' => $faker->uuid,
                'ArchiveDate' => $faker->date,
                'ArchiveTime' => $faker->date,
            ]);
        }
    }
}
