<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function uma_tarefa_pode_ser_criada()
    {
        $response = $this->post('/tasks', [
            'title' => 'Estudar Laravel',
            'description' => 'Praticar testes com PHPUnit',
        ]);

        $response->assertRedirect('/tasks');

        $this->assertDatabaseHas('tasks', [
            'title' => 'Estudar Laravel',
            'description' => 'Praticar testes com PHPUnit',
        ]);
    }
}
