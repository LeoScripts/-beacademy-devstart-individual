<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'avatar' => fake()->imageUrl(),
            'birthDate' => fake()->date(),
            'cpf' => '12345678912',
            'phone' => '98991999999',
            'profession' => 'trabalhador',
            'formation' => 'ensino superior',
            'address' => fake()->streetName(),
            'isAdmin' => '1',
            'email_verified_at' => now(),
            'password' => '123456',
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
