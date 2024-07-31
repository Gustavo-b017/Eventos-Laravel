@extends('layouts.main')

@section('title', 'Produtos Gerais')

@section('content')

  <h1>produtos</h1>

  @if ($busca != '')
    <p>voce esta buscando por: {{$busca}}</p>
  @endif

@endsection