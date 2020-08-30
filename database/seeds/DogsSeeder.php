<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert([
            'id' => 1,
            'name' => "Ataúlfo",
            'user_id' => 1,
            'birth_year' => 2015,
            'sex' => 0,
        ]);

        DB::table('dogs')->insert([
            'id' => 2,
            'name' => "Bob",
            'user_id' => 1,
            'birth_year' => 2017,
            'sex' => 0,
        ]);

        DB::table('dogs')->insert([
            'id' => 3,
            'name' => "Confusão",
            'user_id' => 1,
            'birth_year' => 2018,
            'sex' => 0,
        ]);

        DB::table('dogs')->insert([
            'id' => 4,
            'name' => "Dandara",
            'user_id' => 2,
            'birth_year' => 2015,
            'sex' => 1,
        ]);

        DB::table('dogs')->insert([
            'id' => 5,
            'name' => "Euforia",
            'user_id' => 3,
            'birth_year' => 2019,
            'sex' => 1,
        ]);

        DB::table('dogs')->insert([
            'id' => 6,
            'name' => "Faniquita",
            'user_id' => 3,
            'birth_year' => 2019,
            'sex' => 1,
        ]);

        DB::table('dogs')->insert([
            'id' => 7,
            'name' => "Gastão",
            'user_id' => 4,
            'birth_year' => 2019,
            'sex' => 0,
        ]);

        DB::table('dogs')->insert([
            'id' => 8,
            'name' => "Hermione",
            'user_id' => 4,
            'birth_year' => 2010,
            'sex' => 1,
        ]);

    }
}
