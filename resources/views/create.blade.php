<!-- resources/views/ativos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Novo Ativo</h1>

    <form method="POST" action="{{ route('ativos.store') }}">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <!-- Adicione outros campos do formulário conforme necessário -->

        <button type="submit">Salvar</button>
    </form>
@endsection
