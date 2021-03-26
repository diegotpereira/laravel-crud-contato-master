<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Contatos com Laravel</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}" defer></script>

     <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
    <!--<link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css"> -->
</head>
<body>
   <div class="container">
       @yield('content')
   </div>
   <script src="{{ URL::asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
