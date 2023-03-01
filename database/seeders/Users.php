<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Users extends Seeder
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
            'email' => 'test1@tero.com',
            'password' => bcrypt('123456789'),
            'name' => 'Test1'
        ]);

        User::create([
            'email' => 'test2@tero.com',
            'password' => bcrypt('123456789'),
            'name' => 'Test2'
        ]);

        User::create([
            'email' => 'test3@tero.com',
            'password' => bcrypt('123456789'),
            'name' => 'Test3'
        ]);

        User::create([
            'email' => 'test4@tero.com',
            'password' => bcrypt('123456789'),
            'name' => 'Test4'
        ]);

        User::create([
            'email' => 'test5@tero.com',
            'password' => bcrypt('123456789'),
            'name' => 'Test5'
        ]);

        

    }
}
