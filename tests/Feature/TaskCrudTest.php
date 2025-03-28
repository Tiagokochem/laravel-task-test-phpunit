<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class TaskCrudTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function uma_tarefa_pode_ser_criada()
    {
        $response = $this->post('/tasks', [
            'title' => 'Estudar testes',
            'description' => 'Aprender Laravel com PHPUnit'
        ]);

        $response->assertRedirect('/tasks');
        $this->assertDatabaseHas('tasks', ['title' => 'Estudar testes']);
    }

    /** @test */
    public function o_titulo_e_obrigatorio_para_criar_tarefa()
    {
        $response = $this->post('/tasks', [
            'title' => '',
            'description' => 'Sem título'
        ]);

        $response->assertSessionHasErrors('title');
    }

    /** @test */
    public function uma_tarefa_pode_ser_editada()
    {
        $task = Task::factory()->create(['done' => false]);

        $response = $this->put("/tasks/{$task->id}", [
            'title' => 'Atualizada',
            'description' => 'Descrição nova',
            'done' => true
        ]);

        $response->assertRedirect('/tasks');
        $this->assertDatabaseHas('tasks', ['title' => 'Atualizada', 'done' => true]);
    }

    /** @test */
    public function uma_tarefa_pode_ser_excluida()
    {
        $task = Task::factory()->create();

        $response = $this->delete("/tasks/{$task->id}");

        $response->assertRedirect('/tasks');
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }

    /** @test */
    public function pode_marcar_uma_tarefa_como_concluida()
    {
        $task = Task::factory()->create(['done' => false]);

        $this->put("/tasks/{$task->id}", [
            'title' => $task->title,
            'description' => $task->description,
            'done' => true
        ]);

        $this->assertDatabaseHas('tasks', ['id' => $task->id, 'done' => true]);
    }
}
