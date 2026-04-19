<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Testando routes com views {{ $nome }}</h1>
    {{-- <P>{{$nomeJogo}}</P> --}}
    <a href="{{route('home-index')}}">Clique aqui</a>
</body>
</html>