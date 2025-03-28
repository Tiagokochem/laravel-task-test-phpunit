@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Lista de Tarefas</h3>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Nova Tarefa</a>
    </div>

    @if ($tasks->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <span class="badge {{ $task->done ? 'bg-success' : 'bg-warning' }}">
                                {{ $task->done ? 'Concluída' : 'Pendente' }}
                            </span>
                        </td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-info">Editar</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">Nenhuma tarefa cadastrada.</div>
    @endif
@endsection
