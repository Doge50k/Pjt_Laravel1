<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Loja virtual
    </title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>


    <div class="mt-3 mb-3">
        <a style="margin-left:94%; " href="/home" >

            <img src={{asset ('/img/IconUser.png')}} style="width:52px;height:52px;">

        </a>
    </div>




    @yield('content')
    <script src="{{url("assets\bootstrap\javascript\javascript.js")}}"></script>

</body>

</html>
