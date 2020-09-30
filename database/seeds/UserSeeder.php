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
        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => "Pat Metheny",
                'email' => "patmetheny@gmail.com",
                'password' => Hash::make('123456'),
                'address' => "Pat Metheny street, 89",
            ]
        );

        DB::table('users')->insert(
            [
                'id' => 2,
                'name' => "Jimmy Hendrix",
                'email' => "jimmyhendrix@gmail.com",
                'password' => Hash::make('123456'),
                'address' => "Jimmy Hendrix street, 89",
            ]
        );

        DB::table('users')->insert(
            [
                'id' => 3,
                'name' => "George Benson",
                'email' => "georgebenson@gmail.com",
                'password' => Hash::make('123456'),
                'address' => "George Benson street, 89",
            ]
        );

        DB::table('users')->insert(
            [
                'id' => 4,
                'name' => "Eric Johnson",
                'email' => "ericjohnson@gmail.com",
                'password' => Hash::make('123456'),
                'address' => "Eric J. street, 89",
            ]
        );
    }
}
