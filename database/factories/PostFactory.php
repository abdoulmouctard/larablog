<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition()
    {
        $title = $this->faker->unique()->text(100);

        return [
            "user_id" => $this->faker->numberBetween(1, User::count()),
            "category_id" => $this->faker->numberBetween(1, Category::count()),
            "title" => $title,
            "slug" => Str::slug($title),
            "summary" => $this->faker->text(),
            "published" => $this->faker->boolean(),
            "content" => $this->faker->text(1000),
        ];
    }
}
