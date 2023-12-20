<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public  array $names = ['Ebrahim', 'Ahmed', "Salem", 'Abbas'];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Just training
        collect($this->names)->map(fn ($name) => User::factory()->create(['name' => $name]));

        category::factory(3)->create();
        Post::factory(6)->create();
    }
}
