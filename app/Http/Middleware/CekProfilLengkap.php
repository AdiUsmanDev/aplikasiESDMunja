<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekProfilLengkap
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if (
            $user &&
            $user->role !== 'admin' &&
            !$user->identitas &&
            !$request->is('profile') &&
            !$request->is('logout')
        ) {
            return redirect()->route('profile') 
                ->with('warning', 'Silakan lengkapi profil Anda terlebih dahulu.');
        }

        return $next($request);
    }
}
