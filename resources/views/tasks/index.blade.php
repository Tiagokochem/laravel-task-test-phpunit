@extends('layouts.app')

@section('content')
    <h1>Lista de Tarefas</h1>
    <a href="{{ route('tasks.create') }}">Nova Tarefa</a>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <strong>{{ $task->title }}</strong> - {{ $task->done ? 'Concluída' : 'Pendente' }}
                <a href="{{ route('tasks.edit', $task) }}">Editar</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
