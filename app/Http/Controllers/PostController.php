<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(3)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|min:5|max:255',
            'exerpt' => 'required|min:10|max:255',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'body' => 'required|min:10',
            'thumbnail' => 'required|image'
        ]);

        $attributes['user_id'] = auth()->user()->id;
        $attributes['slug'] = strtolower(Str::of($attributes['title'])->slug('-')) . '-' . $attributes['user_id'] . '-' . $attributes['category_id'];
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        $post = Post::create($attributes);

        return redirect("/posts/$post->slug")->withSuccess('Your post has been created successfully!');
    }
}
