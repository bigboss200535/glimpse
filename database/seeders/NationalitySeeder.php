<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReligionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Seed users table first to get user IDs
        $this->call(UserSeeder::class);

        // Get user IDs to use as foreign keys
        $userIds = DB::table('users')->pluck('UserId');
        
        foreach ($userIds as $userId) {
            // $truncatedUserId = substr($userId, 0, 20);
            DB::table('religion')->insert([

                'ReligionId' => $faker->uuid,
                'Religion' => $faker->word,
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
