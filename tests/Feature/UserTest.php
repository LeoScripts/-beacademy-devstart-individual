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

    public function test_redirect_can_not_user_for_exception()
    {
        $response = $this->get('/users/asdf');
        $response->assertStatus(302);
    }

    public function test_user_rendered_show()
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

    public function test_rendered_view_user_edit()
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123456',
        ]);
        $this->actingAs($user);
        $response = $this->get("/users/$user->id/edit");
        $response->assertStatus(200);
    }

    public function test_rendered_view_users_all()
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123456'
        ]);
        $this->actingAs($user);
        $response = $this->get("/users");
        $response->assertStatus(200);
    }
}
