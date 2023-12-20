<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'categories' => Category::all(),
        'posts' => Post::with('category')->with('user')->get()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/users/{user}', function (User $user) {
    return view('user', [
        'user' => $user,
        'posts' => $user->posts,
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('categories', [
        'category' => $category,
        'posts' => $category->posts
    ]);
});
