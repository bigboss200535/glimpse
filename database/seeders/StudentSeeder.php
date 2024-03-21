<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get user IDs, nationality IDs, religion IDs, and region IDs to use as foreign keys
        $userIds = DB::table('users')->pluck('UserId');
        $nationalityIds = DB::table('nationality')->pluck('NationalityId');
        $religionIds = DB::table('religion')->pluck('ReligionId');
        $regionIds = DB::table('region')->pluck('RegionId');

        foreach ($userIds as $userId) {
            DB::table('students')->insert([
                'StudentId' => $faker->uuid,
                'Firstname' => $faker->firstName,
                'Lastname' => $faker->lastName,
                'Gender' => $faker->randomElement(['Male', 'Female']),
                'NationalityId' => $faker->randomElement($nationalityIds),
                'Address' => $faker->address,
                'DOB' => $faker->date,
                'ReligionId' => $faker->randomElement($religionIds),
                'RegionId' => $faker->randomElement($regionIds),
                'DateJoined' => $faker->date,
                'SectionId' => $faker->uuid, // Assuming SectionId is generated similarly to other IDs
                'Transaction' => $faker->sentence,
                'PreviousSchool' => $faker->word,
                'PreviousClass' => $faker->word,
                'Image' => $faker->imageUrl(),
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
