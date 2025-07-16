<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Socialite;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $role = 'admin';

        $user = Pengguna::firstOrCreate(
            [ 'provider' => 'google', 'provider_id' => $googleUser->id ],
            [
                'email'    => $googleUser->getEmail(),
                'name'     => $googleUser->getName(),
                'password' => bcrypt(Str::random(16)),
                'provider' => 'google',
                'provider_id' => $googleUser->getId(),
                'role' => $role
            ]
        );

        Auth::login($user);

        return redirect('/dashboard');
    }
}
