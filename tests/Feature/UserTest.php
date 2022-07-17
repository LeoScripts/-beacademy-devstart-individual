<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_rendered_home()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_user_show()
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123456',
        ]);
        $this->actingAs($user);
        $response = $this->get("/users/$user->id");
        $response->assertStatus(200);
    }
}
