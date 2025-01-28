<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_task()
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'api');

        $response = $this->postJson('/api/tasks', [
            'title' => 'Test Task',
            'description' => 'A sample task',
        ]);

        $response->assertStatus(201)->assertJson([
            'title' => 'Test Task',
            'description' => 'A sample task',
        ]);
    }
}
