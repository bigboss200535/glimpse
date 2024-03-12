<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'UserId' => 'A0001/21',
            'Username'    => 'admin',
            'Firstname'    => 'System',
            'Lastname'    => 'System',
            'Address'    => 'Santasi, Kumasi',
            'Email'    => 'email@domain.com',
            'Gender'    => 'Male',
            'Password'   =>  Hash::make('admin'),
        ]);
    }
}
