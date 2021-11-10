

@extends('templates.template')

@section('content')

    <div class='text-center ' >
        <div style="border:1px solid rgb(45, 35, 134)" class='on-right mb-4'>
            <a  href="http://127.0.0.1:8000/login" >Login</a>

            <a  href="http://127.0.0.1:8000/register" >Registro</a>
        </div>
    </div>

    <div class="text-center mt-3 mb-4">
        <a href="">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <h1 class="text-center"> Visualizar</h1>

    <div class="col-8 m-auto">
        @php
            $cat=$produto->find($produto->IDProduto)->relcategoria;
        @endphp



        Produto: {{$produto->NomeProduto}}<br>
        Valor: R$ {{$produto->PrecoUnitario}}.00<br>
        Categoria: {{$cat->NomeCategoria}}.<br>
        Descrição: {{$cat->Descricao}}.<br>
        Estoque Total: {{$produto->UnidadesEmEstoque}} unidades



    </div>




@endsection




