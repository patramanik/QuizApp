<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function Loginview()
    {
        return view('auth.login');
    }


    public function Login(Request $request)
    {
      
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }
    public function Dashboard()
    {
        return view('dashboard');
    }
    public function Home()
    {
        return view('pages/home');
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
