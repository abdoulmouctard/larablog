<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
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
            "content" => $this->faker->text(1000)
        ];
    }
}
