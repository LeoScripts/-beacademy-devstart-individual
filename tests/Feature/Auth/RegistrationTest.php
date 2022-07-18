<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/users/create');
        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $user = User::factory()->create();
        $response = $this->post('/users/create', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'cpf' => '12345687912',
            'password' => 'password',
        ]);

        $this->actingAs($user);
        $response = $this->get('/users');
        $response->assertStatus(200);
    }
}
