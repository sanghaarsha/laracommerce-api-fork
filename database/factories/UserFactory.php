<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
        $name = fake()->name();

        return [
            'city_id' => City::inRandomOrder()->first(),
            'name' => $name,
            'username' => str($name)->slug(),
            'email' => str_replace(' ', '.', strtolower($name)).rand(01, 99).'@example.com',
            'phone' => rand(9811111111, 9888888888),
            'nik' => fake()->nik(),
            'role' => fake()->randomElement(['ADMIN', 'STAFF', 'MERCHANT', 'CUSTOMER']),
            'balance' => null,
            'status' => 'ACTIVE',
            'address' => fake()->address(),
            'avatar' => null,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
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
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
