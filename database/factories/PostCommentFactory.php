<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            "post_id" => $this->faker->numberBetween(1, Post::count()),
            "title" => $this->faker->text(50),
            "published" => $this->faker->boolean(),
            "content" => $this->faker->text()
        ];
    }
}
