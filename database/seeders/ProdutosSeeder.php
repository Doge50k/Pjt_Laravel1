<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert
        (
            [
                'NomeProduto' => 'Mouse logitech',
                'Id_cat'=>1,
                'PrecoUnitario' =>98,
                'UnidadesEmEstoque' => 120,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ]
        );

        DB::table('produtos')->insert
        (
           [
               'NomeProduto' => 'Mouse razer',
               'Id_cat'=>1,
               'PrecoUnitario' =>220,
               'UnidadesEmEstoque' => 90,
               'created_at'=> Carbon::now(),
               'updated_at'=> Carbon::now()
           ]
       );

       DB::table('produtos')->insert
       (
           [
              'NomeProduto' => 'Mouse multilaser',
              'Id_cat'=>1,
              'PrecoUnitario' =>50,
              'UnidadesEmEstoque' => 80,
              'created_at'=> Carbon::now(),
              'updated_at'=> Carbon::now()
           ]
      );

      DB::table('produtos')->insert
      (
           [
             'NomeProduto' => 'teclado logitech',
             'Id_cat'=>1,
             'PrecoUnitario' =>350,
             'UnidadesEmEstoque' => 70,
             'created_at'=> Carbon::now(),
             'updated_at'=> Carbon::now()
           ]
      );

     DB::table('produtos')->insert
     (
        [
            'NomeProduto' => 'Teclado multilaser',
            'Id_cat'=>1,
            'PrecoUnitario' =>120,
            'UnidadesEmEstoque' => 80,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]
    );

    DB::table('produtos')->insert
    (
       [
           'NomeProduto' => 'Teclado dell',
           'Id_cat'=>1,
           'PrecoUnitario' =>420,
           'UnidadesEmEstoque' => 80,
           'created_at'=> Carbon::now(),
           'updated_at'=> Carbon::now()
       ]
   );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'pen drive san disk 16gb',
          'Id_cat'=>1,
          'PrecoUnitario' =>25,
          'UnidadesEmEstoque' => 340,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'pen drive san disk 32gb',
          'Id_cat'=>1,
          'PrecoUnitario' =>45,
          'UnidadesEmEstoque' => 340,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'pen drive san disk 64gb',
          'Id_cat'=>1,
          'PrecoUnitario' =>79,
          'UnidadesEmEstoque' => 340,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'pen drive twist 8gb',
          'Id_cat'=>1,
          'PrecoUnitario' =>13,
          'UnidadesEmEstoque' => 340,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'monitor dell',
          'Id_cat'=>1,
          'PrecoUnitario' =>1800,
          'UnidadesEmEstoque' => 140,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'monitor acer',
          'Id_cat'=>1,
          'PrecoUnitario' =>2800,
          'UnidadesEmEstoque' => 140,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'monitor Samsung',
          'Id_cat'=>1,
          'PrecoUnitario' =>900,
          'UnidadesEmEstoque' => 140,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'all in one i5 8gb 1TB HDD',
          'Id_cat'=>2,
          'PrecoUnitario' =>2850,
          'UnidadesEmEstoque' => 90,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Gamer ryzen 5 8gb 256gb SSD',
          'Id_cat'=>2,
          'PrecoUnitario' =>3850,
          'UnidadesEmEstoque' => 90,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Amd athlon 4gb 1TB HDD',
          'Id_cat'=>2,
          'PrecoUnitario' =>1800,
          'UnidadesEmEstoque' => 90,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Amd A6 4gb 500gb HDD',
          'Id_cat'=>2,
          'PrecoUnitario' =>1500,
          'UnidadesEmEstoque' => 90,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Gamer amd ryzen 9 16gb 256gb SSD',
          'Id_cat'=>2,
          'PrecoUnitario' =>4950,
          'UnidadesEmEstoque' => 120,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'intel quad-core 4gb 1TB HDD',
          'Id_cat'=>2,
          'PrecoUnitario' =>2300,
          'UnidadesEmEstoque' => 90,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'intel dual-core 4gb 500gb HDD',
          'Id_cat'=>2,
          'PrecoUnitario' =>2000,
          'UnidadesEmEstoque' => 90,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'intel octa-core 16gb 500gb SSD',
          'Id_cat'=>2,
          'PrecoUnitario' =>5500,
          'UnidadesEmEstoque' => 80,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Imac 8gb 256gb SSD',
          'Id_cat'=>2,
          'PrecoUnitario' =>7500,
          'UnidadesEmEstoque' => 70,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'cooler FAN C3Tech',
          'Id_cat'=>3,
          'PrecoUnitario' =>300,
          'UnidadesEmEstoque' => 350,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'cooler Intel LGA775 LGA115X',
          'Id_cat'=>3,
          'PrecoUnitario' =>120,
          'UnidadesEmEstoque' => 240,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Processador i5 10gen',
          'Id_cat'=>3,
          'PrecoUnitario' =>990,
          'UnidadesEmEstoque' => 240,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Processador atom',
          'Id_cat'=>3,
          'PrecoUnitario' =>280,
          'UnidadesEmEstoque' => 260,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Processador i3 10gen',
          'Id_cat'=>3,
          'PrecoUnitario' =>750,
          'UnidadesEmEstoque' => 300,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Processador i7 10gen',
          'Id_cat'=>3,
          'PrecoUnitario' =>1250,
          'UnidadesEmEstoque' => 300,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Processador athlon',
          'Id_cat'=>3,
          'PrecoUnitario' =>250,
          'UnidadesEmEstoque' => 270,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Processador ryzen 3',
          'Id_cat'=>3,
          'PrecoUnitario' =>579,
          'UnidadesEmEstoque' => 270,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'placa mae Lga 1155',
          'Id_cat'=>3,
          'PrecoUnitario' =>379,
          'UnidadesEmEstoque' => 270,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'placa mae Asus Prime b540m',
          'Id_cat'=>3,
          'PrecoUnitario' =>579,
          'UnidadesEmEstoque' => 370,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'placa mae gigabyte z390',
          'Id_cat'=>3,
          'PrecoUnitario' =>779,
          'UnidadesEmEstoque' => 370,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'gabinete skylancer',
          'Id_cat'=>3,
          'PrecoUnitario' =>349,
          'UnidadesEmEstoque' => 460,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'gabinete sharkoom',
          'Id_cat'=>3,
          'PrecoUnitario' =>420,
          'UnidadesEmEstoque' => 260,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'gabinete PGKN-01',
          'Id_cat'=>3,
          'PrecoUnitario' =>120,
          'UnidadesEmEstoque' => 360,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Memoria Ram T-force 8gb ddr4 2666Mhz',
          'Id_cat'=>3,
          'PrecoUnitario' =>320,
          'UnidadesEmEstoque' => 450,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Memoria Ram Crucial 8gb ddr4 3200Mhz',
          'Id_cat'=>3,
          'PrecoUnitario' =>450,
          'UnidadesEmEstoque' => 420,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Memoria Ram Hyper-x 8gb ddr4 2666Mhz',
          'Id_cat'=>3,
          'PrecoUnitario' =>470,
          'UnidadesEmEstoque' => 160,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Memoria Ram XPG 16gb ddr4 3200Mhz',
          'Id_cat'=>3,
          'PrecoUnitario' =>770,
          'UnidadesEmEstoque' => 400,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'HDD 1TB',
          'Id_cat'=>3,
          'PrecoUnitario' =>220,
          'UnidadesEmEstoque' => 500,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'HDD 500GB',
          'Id_cat'=>3,
          'PrecoUnitario' =>150,
          'UnidadesEmEstoque' => 400,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'HDD 2TB',
          'Id_cat'=>3,
          'PrecoUnitario' =>450,
          'UnidadesEmEstoque' => 300,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'SSD 500GB',
          'Id_cat'=>3,
          'PrecoUnitario' =>550,
          'UnidadesEmEstoque' => 520,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'SSD 1TB',
          'Id_cat'=>3,
          'PrecoUnitario' =>1150,
          'UnidadesEmEstoque' => 260,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'SSD 256GB',
          'Id_cat'=>3,
          'PrecoUnitario' =>340,
          'UnidadesEmEstoque' => 430,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Fonte Atx 500w',
          'Id_cat'=>3,
          'PrecoUnitario' =>480,
          'UnidadesEmEstoque' => 160,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Fonte Aerocool 350w',
          'Id_cat'=>3,
          'PrecoUnitario' =>230,
          'UnidadesEmEstoque' => 160,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Fonte Kmex 200w',
          'Id_cat'=>3,
          'PrecoUnitario' =>150,
          'UnidadesEmEstoque' => 260,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Fonte atx 750w',
          'Id_cat'=>3,
          'PrecoUnitario' =>670,
          'UnidadesEmEstoque' => 460,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Fonte Gamemax 1200w',
          'Id_cat'=>3,
          'PrecoUnitario' =>870,
          'UnidadesEmEstoque' => 260,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Placa de video gt1030 2gb',
          'Id_cat'=>3,
          'PrecoUnitario' =>370,
          'UnidadesEmEstoque' => 60,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Placa de video gtx 1660 ti 6gb',
          'Id_cat'=>3,
          'PrecoUnitario' =>2370,
          'UnidadesEmEstoque' => 260,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Placa de video rtx 2060 6gb',
          'Id_cat'=>3,
          'PrecoUnitario' =>3370,
          'UnidadesEmEstoque' => 160,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Placa de video rtx 3080 ti 8gb',
          'Id_cat'=>3,
          'PrecoUnitario' =>7850,
          'UnidadesEmEstoque' => 460,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    DB::table('produtos')->insert
    (
       [
          'NomeProduto' => 'Placa de video Rx550 4gb',
          'Id_cat'=>3,
          'PrecoUnitario' =>2700,
          'UnidadesEmEstoque' => 560,
          'created_at'=> Carbon::now(),
          'updated_at'=> Carbon::now()
       ]
    );

    }
}
