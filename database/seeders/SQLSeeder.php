<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SQLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $path: is the path of the script
        // $sql: is the script to be stored (uploads_script.sql)

        $path = base_path() . '/database/seeds/uploads_script.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
// use->
// php artisan db:seed --class=SQLSeeder
// to run the seeders 
