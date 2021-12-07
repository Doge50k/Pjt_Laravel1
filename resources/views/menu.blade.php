@extends('templates.template')

@section('content')


    <h1 class="text-center"> Lobby </h1>




    <div  class="row mb-4 mt-4 ms-5 ">

            @foreach ($produto as $p)
                @php
                    $cat = $p->find($p->IDProduto)->relcategoria;
                @endphp

                <div class="row border col-md-3">
                    <div class="col-md-12 ">
                        <div class="card mb-4 mt-4 ">

                            <div class="card-body me-auto ms-auto">
                                <h5 class="text-dark">{{$cat->NomeCategoria}}: {{$p->NomeProduto}}</h5>
                                 <b class="text-primary">R$ {{$p->PrecoUnitario}}</b>
                                <p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{url("produtos/$p->IDProduto")}}">
                                        <button type="button" class="btn btn-success" data-bs-toggle="button" autocomplete="off">comprar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach


    </div>







@endsection
