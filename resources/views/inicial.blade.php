

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

    <h1 class="text-center"> Tela inicial de teste</h1>

    <div class= "col-8 m-auto">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
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
                        /* dd($p->IDProduto); */

                        /* $pe=$p->find($p->all('IDProduto'));
                        dd($pe); */

                        /* $pe=$p->find($p->all('Id_cat'));
                        dd($pe); */


                        /* $pe=$p->find(20)->relcategoria;
                        dd($pe); */

                        $cat = $p->find($p->IDProduto)->relcategoria;
                        /* dd($pe->NomeCategoria); */



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

                            <a href="">
                                <button class="btn btn-primary">Editar</button>
                            </a>

                            <a href="">
                                <button class="btn btn-danger">Deletar</button>
                            </a>

                        </td>
                    </tr>

                @endforeach

            </tbody>
          </table>
    </div>


@endsection




