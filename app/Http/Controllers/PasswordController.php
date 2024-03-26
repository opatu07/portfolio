<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {   
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        if(!Hash::check($request->current_password, auth()->user()->password)){
            return back()->with("error", "CURRENT_PASSWORDが間違っています。");
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return back()->with('success', 'パスワードを更新しました。');
    }
}
