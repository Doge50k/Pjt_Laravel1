<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use App\models\User;
use App\Models\produtos;

class inicialController extends Controller
{

    private $objUser;
    private $objProdutos;
    private $objCategoria;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objProdutos = new Produtos();
        $this->objCategoria = new Categoria();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $this->middleware('auth');
        $produto=Produtos::all()->sortBy('Id_cat');
        return view('inicial',compact('produto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categoria=$this->objCategoria->all();
        return view('create',compact('Categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdutoRequest $request)
    {
        $cad=$this->objProdutos->create
        ([
            'NomeProduto'=>$request->NomeProduto,
            'UnidadesEmEstoque'=>$request->UnidadesEmEstoque,
            'PrecoUnitario'=>$request->PrecoUnitario,
            'Id_cat'=>$request->Id_cat
        ]);
        if($cad){
            return redirect('produtos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto=$this->objProdutos->find($id);
        return view('show',compact('produto'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = $this->objProdutos->find($id);
        $Categoria=$this->objCategoria->all();

        return view('create', compact('produto','Categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdutoRequest $request, $id)
    {
        $this->objProdutos->where(['IDProduto'=>$id])->update
        ([
            'NomeProduto'=>$request->NomeProduto,
            'UnidadesEmEstoque'=>$request->UnidadesEmEstoque,
            'PrecoUnitario'=>$request->PrecoUnitario,
            'Id_cat'=>$request->Id_cat
        ]);
        return redirect ('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->objProdutos->destroy($id);
        return ($delete)?"sim":"não";
    }
}
