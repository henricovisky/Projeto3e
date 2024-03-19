<!-- resources/views/ativos/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Ativo - {{ $ativo->nome }}</h1>

    <form method="POST" action="{{ route('ativos.update', $ativo->id) }}">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $ativo->nome }}">

        <!-- Adicione outros campos do formulário preenchidos com os valores atuais do ativo -->

        <button type="submit">Salvar Alterações</button>
    </form>
@endsection
