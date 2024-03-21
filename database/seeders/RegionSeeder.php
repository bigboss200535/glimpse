<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get user IDs to use as foreign keys
        $userIds = DB::table('users')->pluck('UserId');

        foreach ($userIds as $userId) {
            for ($i = 0; $i < 10; $i++) { // Insert 10 regions for each user
                DB::table('region')->insert([
                    'RegionId' => $faker->uuid,
                    'Region' => $faker->city, // Assuming cities can represent regions
                    'AddedId' => $userId,
                    'UserId' => $userId,
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
}
