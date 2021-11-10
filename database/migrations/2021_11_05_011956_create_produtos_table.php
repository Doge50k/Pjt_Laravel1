<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('produtos', function (Blueprint $table)
        {
            $table->id('IDProduto');
            $table->unsignedBigInteger('Id_cat');

            $table->timestamps();
            $table->string('NomeProduto', 40);
            $table->double('PrecoUnitario', 10, 2);
            $table->smallInteger('UnidadesEmEstoque');

            $table->foreign('Id_cat')->references('IDCategoria')->on('categorias')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function(Blueprint $table)
        {

            $table->dropIfExists('produtos');
            $table->dropForeign(['Id_categoria']);

        });


    }
}
