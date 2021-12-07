

@extends('templates.template')

@section('content')


    <div style="solid rgb(45, 35, 134)" class='ms-2 mb-4'>
        <a href="http://127.0.0.1:8000/">voltar</a>

    </div>

    <h1 class="text-center"> Produtos</h1><br>

{{--     <div class="col-8 m-auto">
        @php
            $cat=$produto->find($produto->IDProduto)->relcategoria;
        @endphp

        Produto: {{$produto->NomeProduto}}<br>
        Valor: R$ {{$produto->PrecoUnitario}}<br>
        Categoria: {{$cat->NomeCategoria}}.<br>
        Descrição: {{$cat->Descricao}}.<br>
        Estoque Total: {{$produto->UnidadesEmEstoque}} unidades

    </div> --}}
    <div class="container border mb-3">

        <div class="row border">

            <div class="mt-5 mb-5 ms-5 me-3 col-sm-6 border">
                <div class="ms-auto me-auto mt-4 mb-4 ">
                    <img src={{asset ('/img/stockphoto.jpg')}} style="width:300px;height:300px;">
                </div>

            </div>
            <div class="mt-5 mb-5 ms-auto me-3 col border">

                <div class="col-8 mt-5 ms-4 mb-auto me-4 ">

                    @php
                        $cat=$produto->find($produto->IDProduto)->relcategoria;
                    @endphp

                    <script>
                        function alerta1()
                        {

                            var qtd = document.getElementById("qtd").value;
                            if (qtd != null);
                            {
                                alert("Você efetuou uma compra " + qtd);
                            }

                        }



                    </script>

                    <h3>{{$produto->NomeProduto}}</h3><br>
                    <h6>De <s> R$ {{($produto->PrecoUnitario)+150}}</s></h6>
                    <h4><b >Por R$ {{$produto->PrecoUnitario}}</h4>
                    <p href="#" class="text-secondary">R$ {{($produto->PrecoUnitario)+20}} em até 10x de R${{(($produto->PrecoUnitario)+20)/10}}</p>
                    <input type="number" name="qtd" id="qtd"><br><br>

                    <p class="text-secondary">Categoria: {{$cat->NomeCategoria}}.<br>

                    {{$produto->UnidadesEmEstoque}} unidades restantes.</p>

                    <button onclick="alerta1()" class="btn btn-success" value="btn_alert">
                        COMPRAR
                    </button>

                </div>

            </div>
            <div class="mb-4">
                Descrição: {{$cat->Descricao}}.<br>
            </div>

        </div>
    </div>

@endsection




