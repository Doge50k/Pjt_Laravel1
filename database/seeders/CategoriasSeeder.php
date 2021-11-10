<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert
        (
           [
               'NomeCategoria' => 'Periférico',
               'Descricao' =>'Dispositivo auxiliar',
               'created_at'=> Carbon::now(),
               'updated_at'=> Carbon::now()
           ]
       );
       DB::table('categorias')->insert
       (
          [
              'NomeCategoria' => 'Computador',
              'Descricao' =>'Dispositivo eletrônico já montado',
              'created_at'=> Carbon::now(),
              'updated_at'=> Carbon::now()
          ]
      );
      DB::table('categorias')->insert
      (
            [
                'NomeCategoria' => 'hardware',
                'Descricao' =>'Peça eletrônica separada',
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
     );
    }
}
