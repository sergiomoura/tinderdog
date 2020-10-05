<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert(
            [
                'url' => 'caminhoParaFoto1.jpg',
                'dog_id' => 1
            ]
        );
        DB::table('photos')->insert(
            [
                'url' => 'caminhoParaFoto2.jpg',
                'dog_id' => 1
            ]
        );
        DB::table('photos')->insert(
            [
                'url' => 'caminhoParaFoto3.jpg',
                'dog_id' => 1
            ]
        );
    }
}
