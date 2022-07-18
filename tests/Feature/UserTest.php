<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use PhpParser\Node\Stmt\Throw_;
use App\Exceptions\UserControllerException;

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

    public function test_rendered_view_welcome()
    {
        $response = $this->get(route('index'));
        $response->assertViewIs('welcome');
    }

    public function test_rendered_view_login()
    {
        $response = $this->get(route('login'));
        $response->assertViewHas('login');
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
        $response = $this->get("/users/$user->id");
        $response->assertStatus(200);
    }

    public function test_method_edi_user()
    {
        $user = User::factory()->create();
        $this->post('/login', [
            'email' => $user->email,
            'password' => '123456'
        ]);
        $this->actingAs($user);
        $response = $this->put("/users/$user->id", [
            'email' => $user->email,
            'password' => '123455'
        ]);
        $response = $this->get("/users/$user->id");
        $response->assertStatus(200);
    }
}
