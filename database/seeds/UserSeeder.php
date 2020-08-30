<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "Alice",
            'email' => 'alice@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => "Bartolomeu",
            'email' => 'bartolomeu@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => "César",
            'email' => 'cesar@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => "Danilo",
            'email' => 'danilo@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
