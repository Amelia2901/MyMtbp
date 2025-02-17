<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
            'captcha' => config('captcha.disable') ? '' : 'required|captcha',
        ]);

        $loginField = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $credentials = [
            $loginField => $request->input('login'),
            'password' => $request->input('password'),
        ];

        $key = 'login.attempts.' . $request->ip();
        $maxAttempts = 3;
        $decayMinutes = 15;

        if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
            return back()->withErrors([
                'loginError' => 'Terlalu banyak percobaan. Tolong coba lagi dalam ' . RateLimiter::availableIn($key) . ' detik.',
            ]);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            RateLimiter::clear($key);
            return redirect()->intended('/dashboard');
        }

        RateLimiter::hit($key, $decayMinutes * 60);

        return back()->withErrors([
            'loginError' => 'Login Gagal. Tolong coba lagi, anda memiliki ' . RateLimiter::attempts($key) . ' percobaan tersisa.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
