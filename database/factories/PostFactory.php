<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->map(fn ($c) => $c->id)->random(),
            'category_id' => Category::all()->map(fn ($c) => $c->id)->random(),
            'title' => fake()->sentence,
            'title' => fake()->sentence,
            'slug' => fake()->slug,
            'body' => fake()->paragraph,
        ];
    }
}
