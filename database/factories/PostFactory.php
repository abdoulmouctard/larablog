<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->text(100);
        return [
            "title" => $title,
            "slug" => Str::slug($title),
            "summary" => $this->faker->text(),
            "content" => $this->faker->text(1000),
            "published_at" => $this->faker->dateTime(),
            "user_id" => rand(1, User::count())
        ];
    }
}
