<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'mobile' => $this->faker->phoneNumber(),
            "intro" => $this->faker->text(200),
            "profile" => $this->faker->randomElement(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function admins(): UserFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'profile' => User::PROFILES[0],
            ];
        });
    }

    public function standards(): UserFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'profile' => User::PROFILES[1],
            ];
        });
    }
}
