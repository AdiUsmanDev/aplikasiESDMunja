<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class AuthControllermanual extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nama'     => 'required|string|max:255',
            'email'    => 'required|email|unique:pengguna,email',
            'password' => 'required|string|min:6',
        ],[
        'email.unique' => 'Email sudah terdaftar.', 
        ]);

        $user = Pengguna::create([
            'name'         => $request->nama,
            'email'        => $request->email,
            'password'     => bcrypt($request->password),
            'provider'     => null,
            'provider_id'  => null,
            'role'         => 'admin', 
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
