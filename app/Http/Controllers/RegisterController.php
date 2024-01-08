<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:7|max:255',
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
