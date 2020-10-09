<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dogs')->insert(
            [
                'id' => 1,
                'name' => 'AUAU',
                'bio' => 'Super Cão garanhão',
                'breed' => 'Vira Lata',
                'birth' => '2016-02-02',
                'gender' => 'm',
                'user_id'=> 1
            ]
            );

            DB::table('dogs')->insert(
                [
                    'id' => 2,
                    'name' => 'Pulguento',
                    'bio' => 'Super Cão barulhento ',
                    'breed' => 'Vira Lata',
                    'birth' => '2014-02-02',
                    'gender' => 'm',
                    'user_id'=> 2
                ]
                );

                DB::table('dogs')->insert(
                    [
                        'id' => 3,
                        'name' => 'Mimoza',
                        'bio' => 'Linda e Exuberante',
                        'breed' => 'Vira Lata',
                        'birth' => '2017-02-02',
                        'gender' => 'f',
                        'user_id'=> 3
                    ]
                    );

                    DB::table('dogs')->insert(
                        [
                            'id' => 4,
                            'name' => 'Linduxa',
                            'bio' => 'Gata de quatro patas',
                            'breed' => 'Vira Lata',
                            'birth' => '2016-03-05',
                            'gender' => 'f',
                            'user_id'=> 1
                        ]
                        );
    }
}
