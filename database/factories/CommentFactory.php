<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "post_id" => rand(1, Post::query()->count()),
            "parent_id" => null,
            "title" => $this->faker->text(100),
            "published_at" => $this->faker->date(),
            "content" => $this->faker->text(200)
        ];
    }
}
