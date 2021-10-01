<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    protected $fillable = [

        'IDProduto',
        'IDCategoria',
        'NomeProduto',
        'PrecoUnitario',
        'UnidadesEmEstoque',

    ];

    public function produtos()
    {
        return $this->belongsTo(produtos::class,'IDCategoria');
    }

}
