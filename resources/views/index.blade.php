<!-- resources/views/ativos/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista de Ativos</h1>

    <ul>
        @foreach ($ativos as $ativo)
            <li>{{ $ativo->nome }} - {{ $ativo->descricao }}</li>
        @endforeach
    </ul>
@endsection