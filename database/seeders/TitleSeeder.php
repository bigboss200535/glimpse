<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TitleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get user IDs to use as foreign keys
        $userIds = DB::table('users')->pluck('UserId');

        foreach ($userIds as $userId) {
            DB::table('title')->insert([
                'TitleId' => $faker->uuid,
                'Title' => $faker->randomElement(['MR', 'MISS', 'DR' , 'MRS']),
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
