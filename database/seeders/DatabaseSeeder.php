<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public  array $names = ['ebrahim', 'ahmed', "salem", 'abbas'];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Just training
        collect($this->names)->map(fn ($name) => User::factory()->create([
            'name' => ucfirst($name),
            'username' => $name . '123',
            'email' => $name . '@test.com'
        ]));

        category::factory(3)->create();
        Post::factory(9)->create();
        Comment::factory(36)->create();
    }
}
