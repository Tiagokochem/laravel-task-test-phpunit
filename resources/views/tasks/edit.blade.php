@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Editar Tarefa</div>
        <div class="card-body">
            <form method="POST" action="{{ route('tasks.update', $task) }}">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ $task->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea name="description" class="form-control">{{ $task->description }}</textarea>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="done" class="form-check-input" id="doneCheck" {{ $task->done ? 'checked' : '' }}>
                    <label class="form-check-label" for="doneCheck">Concluída</label>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </div>
@endsection
