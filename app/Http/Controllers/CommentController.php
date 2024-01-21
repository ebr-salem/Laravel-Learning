<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $request->validate([
            'body' => 'required|min:3'
        ]);

        $post->comments()->create([
            'user_id' => $request->user()->id,
            'body' => $request->body
        ]);

        return redirect()->back()->with('success', 'Your comment has been sent!');
    }
}
