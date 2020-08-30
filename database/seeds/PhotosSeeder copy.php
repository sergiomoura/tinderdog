<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 32; $i++) { 
            DB::table('photos')->insert([
                'id' => $i,
                'path' => "no-image.png",
                'dog_id' => ceil($i / 4)
            ]);
        }

    }
}
