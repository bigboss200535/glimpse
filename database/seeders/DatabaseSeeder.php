<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
            UserSeeder::class,
            RegionSeeder::class,
            TitleSeeder::class,
            NationalitySeeder::class,
            ReligionSeeder::class,
            // StudentSeeder::class,
        ]);
    }
}
