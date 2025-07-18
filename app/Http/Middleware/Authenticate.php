<?php

namespace App\Http\Middleware;

// Menggunakan middleware bawaan Laravel sebagai dasar
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Method ini dijalankan saat user tidak login.
     * Mengarahkan user ke halaman login jika belum login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request): ?string
    {
        // Jika permintaan bukan dari API (bukan expects JSON), redirect ke route login
        if (! $request->expectsJson()) {
            return route('masuk'); // Ganti dengan nama route login kamu
        }

        return null;
    }
}
