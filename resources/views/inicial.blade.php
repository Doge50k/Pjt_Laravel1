

@extends('templates.template')

@section('content')

    <div class="text-center mt-3 mb-4">
        
        <a href="http://127.0.0.1:8000" class="ms-2">
            voltar
        </a>
        <a href="{{url('produtos/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>

    </div>

    <h1 class="text-center"> Tela de administração</h1>

    <div class= "col-8 m-auto">
        @csrf
        <table class="table">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Categoria</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Estoque</th>
                <th scope="col">Edição</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($produto as $p)

                    @php
                        $cat = $p->find($p->IDProduto)->relcategoria;
                    @endphp

                    <tr>
                        <th scope="row">{{$p->IDProduto}}</th>
                        <td>{{$cat->NomeCategoria}}</td>
                        <td>{{$p->NomeProduto}}</td>
                        <td>{{$p->PrecoUnitario}}</td>
                        <td>{{$p->UnidadesEmEstoque}}</td>

                        <td>
                            <a href="{{url("produtos/$p->IDProduto")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>

                            <a href="{{url("produtos/$p->IDProduto/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>

                            <a href="{{url("produtos/$p->IDProduto")}}" class = "js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>

                        </td>
                    </tr>

                @endforeach

            </tbody>
          </table>
    </div>


@endsection




