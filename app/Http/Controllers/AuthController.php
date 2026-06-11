<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        // Jika sudah login, langsung lempar ke dashboard
        if (session()->has('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Akun demo admin (bisa kamu ganti sesuka hati)
        if ($credentials['username'] === 'admin' && $credentials['password'] === 'rahasia123') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['error' => 'Username atau password salah!']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('login');
    }
}