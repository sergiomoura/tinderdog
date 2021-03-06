<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(DogSeeder::class);
         $this->call(LikeSeeder::class);
         $this->call(MessageSeeder::class);
         $this->call(PhotoSeeder::class);
    }
}
