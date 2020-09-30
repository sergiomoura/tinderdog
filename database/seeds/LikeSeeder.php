<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert(
            [
                'liker_id' => 2,
                'liked_id' => 3,
            ]
         
        );

        DB::table('likes')->insert(
            [
                'liker_id' => 1,
                'liked_id' => 3,
            ]
         
        );

        DB::table('likes')->insert(
            [
                'liker_id' => 1,
                'liked_id' => 4,
            ]
         
        );

        DB::table('likes')->insert(
            [
                'liker_id' => 4,
                'liked_id' => 2,
            ]
         
        );
    }
}
