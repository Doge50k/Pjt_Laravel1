

@extends('templates.template')

@section('content')

    <div style="solid rgb(45, 35, 134)" class='ms-2 mb-4'>
        <a href="http://127.0.0.1:8000/produtos">voltar</a>

    </div>


    <h1 class="text-center mb-4"> @if(isset($produto))Editar Produto @else Cadastrar Produto @endif</h1>

    @if(isset($errors) && count($errors)>0)

        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>

    @endif

    @if(isset($produto))
        <form name="formEdit" id="formEdit" method="post" action="{{url("produtos/$produto->IDProduto")}}">
            @method('PUT')
    @else
        <form name="formCAD" id="formCAD" method="post" action="{{url('produtos')}}">

    @endif


    <div class= "col-8 m-auto">
        <form name="formCAD" id="formCAD" method="post" action="{{url('produtos')}}">
            @csrf
            <input class="form-control" type="text" name="NomeProduto" id="NomeProduto" placeholder="Nome do Produto" value="{{$produto->NomeProduto ?? ''}}" required><br>
            <select class="form-control" name="Id_cat" id="Id_cat" required>
                <option value="{{$produto->relcategoria->IDCategoria ?? ''}}">{{$produto->relcategoria->NomeCategoria ?? 'Selecione'}}</option>
                @foreach ($Categoria as $cat)
                    <option value="{{$cat->IDCategoria}}">{{$cat->NomeCategoria}}</option>

                @endforeach

            </select><br>
            <input class="form-control" type="text" name="PrecoUnitario" id="PrecoUnitario" placeholder="Preço" value="{{$produto->PrecoUnitario ?? ''}}" required><br>
            <input class="form-control" type="text" name="UnidadesEmEstoque" id="UnidadesEmEstoque" placeholder="Quantidade em estoque:" value="{{$produto->UnidadesEmEstoque ?? ''}}" required><br>
            <input class="btn btn-primary" type="submit" value="@if(isset($produto))Confirmar @else Cadastrar @endif">
        </form>
    </div>


@endsection
