<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produtos;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected  $primaryKey = 'IDCategoria';

    protected $fillable = [

        'NomeCategoria',
        'Descricao'
    ];



    public function relprodutos()
    {
        return $this->hasMany('App\Models\produtos','Id_cat','IDProduto');
    }

}
