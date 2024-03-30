<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {   
        return view('auth/login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt($validated)) {
            throw ValidationException::withMessages([
                'email || password' => 'メールアドレスとパスワードを再度ご確認ください。'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'アカウント登録できました。');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
