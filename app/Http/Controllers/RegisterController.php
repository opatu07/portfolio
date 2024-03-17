<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);
        
        auth()->login(User::create($attributes));
        return redirect('/');
    }
}
