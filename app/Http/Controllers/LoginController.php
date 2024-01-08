<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            session()->regenerate();

            throw ValidationException::withMessages([
                'email' => 'Your provided credentials is not found.'
            ]);
        }

        return redirect('/')->with('success', "Welcome Back, " . auth()->user()->name);
    }

    public function create()
    {
        return view('login.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Good Bye!');
    }
}
