<!-- resources/views/ativos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $ativo->nome }}</h1>
    <p><strong>Descrição:</strong> {{ $ativo->descricao }}</p>
    <p><strong>Categoria:</strong> {{ $ativo->categoria }}</p>
    <!-- Adicione outros campos conforme necessário -->
@endsection