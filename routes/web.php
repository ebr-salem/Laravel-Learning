<?php

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
    return view('posts');
});

Route::get('/posts/{slug}', function ($slug) {
    if (!file_exists($path = __DIR__ . "/../resources/posts/$slug.html")) {
        abort(404);
    }

    $post = cache()->remember('post.file', 3600, fn () => file_get_contents($path));

    return view('post', [
        'post' => $post
    ]);
})->where('slug', '[A-z_\-]+');
