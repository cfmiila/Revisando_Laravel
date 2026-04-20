@extends('layout.app')

@section('title','listagem')

@section('content')
    <h1>Listagem de Jogos</h1>
      <table class="table table-striped table-hover">
       <thead class="table-dark">
        <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Nome</th>
        <th scope="col">Ano de Criação</th>
        <th scope="col">Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jogos as $jogo)
        <tr>
        {{-- <th{{$jogo->id}}</th> --}}
        <td>{{$jogo->nome}}</td>
        <td>{{$jogo->ano_criacao}}</td>
        <td>{{ number_format($jogo->valor, 2, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection