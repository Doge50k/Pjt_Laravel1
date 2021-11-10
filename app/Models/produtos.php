<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use HasFactory;

class produtos extends Model
{
    protected $table = 'produtos';
    protected  $primaryKey = 'IDProduto';

    protected $fillable = [

        'Id_cat',
        'NomeProduto',
        'PrecoUnitario',
        'UnidadesEmEstoque'

    ];

/*     public function relCategoria()
    {
        return $this->hasOne('App\Models\Categoria','Id_cat');
    } */

    public function relcategoria()
    {
        return $this->belongsTo('App\Models\Categoria','Id_cat','IDCategoria');
    }

}


