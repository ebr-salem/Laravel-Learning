<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Ebrahim',
            'email' => 'ebrahim@test.com',
        ]);

        User::factory()->create([
            'name' => 'Salem',
            'email' => 'salem@test.com',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Category::create([
            'name' => 'Hobies',
            'slug' => 'hobies',
        ]);

        Post::create([
            'title' => 'Personal Post',
            'slug' => 'personal-post',
            'user_id' => 1,
            'category_id' => 1,
            'body' => 'Vue (pronounced /vjuː/, like view) is a JavaScript framework for building user interfaces. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.'
        ]);

        Post::create([
            'title' => 'Work Post',
            'slug' => 'work-post',
            'user_id' => 1,
            'category_id' => 2,
            'body' => 'Vue (pronounced /vjuː/, like view) is a JavaScript framework for building user interfaces. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.'
        ]);

        Post::create([
            'title' => 'Hoby Post',
            'slug' => 'hoby-post',
            'user_id' => 2,
            'category_id' => 3,
            'body' => 'Vue (pronounced /vjuː/, like view) is a JavaScript framework for building user interfaces. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.'
        ]);

        Post::create([
            'title' => 'My Story',
            'slug' => 'my-story',
            'user_id' => 2,
            'category_id' => 1,
            'body' => 'Vue (pronounced /vjuː/, like view) is a JavaScript framework for building user interfaces. It builds on top of standard HTML, CSS, and JavaScript and provides a declarative and component-based programming model that helps you efficiently develop user interfaces, be they simple or complex.'
        ]);
    }
}
