<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function getAuth()
    {   
        return view('auth.login');
    }

    public function postAuth(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'メールアドレスが登録されていません。',
                'password' => 'パスワードが間違っています。'
            ]);
        }

        session()->regenerate();

        return view('auth.login')->with('success', 'アカウント登録できました。');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
