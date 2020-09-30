<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert(
            [
                'id'=>1,
                'text'=> 'Oi gata vamos comer uma ração',
                'sender_id'=> 2,
                'recipient_id'=>4,
                'datetime' => DB::raw('now()'),
            ]
        );

        DB::table('messages')->insert(
            [
                'id'=>2,
                'text'=> 'Oi gato vamos dar um role',
                'sender_id'=> 1,
                'recipient_id'=>3,
                'datetime' => DB::raw('now()'),
            ]
        );

        DB::table('messages')->insert(
            [
                'id'=>3,
                'text'=> 'Oi gata vamos ao parque',
                'sender_id'=> 2,
                'recipient_id'=>4,
                'datetime' => DB::raw('now()'),
            ]
        );

        DB::table('messages')->insert(
            [
                'id'=>4,
                'text'=> 'Oi gata vamos ao parque',
                'sender_id'=> 1,
                'recipient_id'=>4,
                'datetime' => DB::raw('now()'),
            ]
        );
    }
}
