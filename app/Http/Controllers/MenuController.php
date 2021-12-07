<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produtos;

class MenuController extends Controller
{
    private $objProdutos;

    public function __construct()
    {
        $this->objProdutos = new Produtos();
    }
    public function index()
    {
        $produto=Produtos::all()->sortBy('Id_cat');
        return view('menu',compact('produto'));
    }
    public function show($id)
    {
        $produto=$this->objProdutos->find($id);
        dd($produto);
        return view('show',compact('produto'));

    }
}
