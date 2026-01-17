<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) { // check email/password [web:189][web:205]
            $request->session()->regenerate();
            return redirect()->intended(route('admin.home'))
                ->with('success', 'You are now logged in.');
        }

        return back()
            ->withErrors(['email' => 'Invalid credentials.'])
            ->onlyInput('email');
    }

     public function logout(Request $request)
    {
        Auth::logout(); // remove user from session [web:189][web:192]

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'You have been logged out.');
    }
}
