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
            'user_id' => User::all()->map(fn ($u) => $u->id)->random(),
            'category_id' => Category::all()->map(fn ($c) => $c->id)->random(),
            'title' => fake()->sentence(4),
            'slug' => fake()->unique()->slug(2),
            'exerpt' => fake()->sentence(50),
            'body' => fake()->paragraph(50),
        ];
    }
}
