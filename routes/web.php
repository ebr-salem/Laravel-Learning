<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comment/store', [CommentController::class, 'store'])->middleware('auth');

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [LoginController::class, 'create'])->middleware('guest');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');

Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('can:admin')->controller(PostController::class)->name('posts.')->group(function () {
    // you can use the Route::resource() if you want
    Route::get('admin/posts/create',  'create')->name('create');
    Route::post('admin/posts',  'store')->name('store');

    Route::get('admin/posts/{post:slug}/edit',  'edit')->name('edit');
    Route::patch('admin/posts/{post:slug}',  'update')->name('update');
    Route::delete('admin/posts/{post:slug}',  'destroy')->name('delete');
});
