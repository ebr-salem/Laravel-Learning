<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'post_id' => Post::all()->map(fn ($p) => $p->id)->random(),
            'body' => fake()->sentence(15),
            'posted_at' => now()
        ];
    }
}
