@extends('layouts.app')

@section('content')
    <h1>Nova Tarefa</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label>Título</label>
        <input type="text" name="title">
        <label>Descrição</label>
        <textarea name="description"></textarea>
        <button type="submit">Salvar</button>
    </form>
@endsection
