<!-- resources/views/ativos/delete.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Confirmação de Exclusão</h1>
    <p>Você tem certeza que deseja excluir o ativo "{{ $ativo->nome }}"?</p>
    <form method="POST" action="{{ route('ativos.destroy', $ativo->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Confirmar Exclusão</button>
    </form>
@endsection