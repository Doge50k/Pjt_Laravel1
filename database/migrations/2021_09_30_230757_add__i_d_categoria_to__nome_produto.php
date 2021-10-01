<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIDCategoriaToNomeProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table)
        {
            $table->foreignId('IDCategoria')->after('IDProduto');
            $table->foreign('IDCategoria')->references('IDCategoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table)
        {
            $table->dropForeign('produtos_IDCategoria_foreign');
            $table->dropColumn('IDCategoria');
        });
    }
}
