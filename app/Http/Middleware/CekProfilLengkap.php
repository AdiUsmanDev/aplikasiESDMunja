<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekProfilLengkap
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
 
       //dd('Middleware dijalankan', $user);
       if (
    $user &&
    $user->role !== 'admin' &&
    (
        !$user->identitas ||  
        
        $user->identitas->nama == '' ||
        $user->identitas->email == '' ||
        $user->identitas->nama_perusahaan == '' ||
        $user->identitas->kode_kbli == '' ||
        $user->identitas->nomorhp == '' ||
        $user->identitas->alamatusaha == '' ||
        $user->identitas->nomor_induk_berusaha == '' ||
        $user->identitas->nomor_pokok_wajib_pajak == ''
    ) &&
    !$request->is('profile') &&
    !$request->is('logout')
) {
    return redirect()->route('profile')
        ->with('warning', 'Silakan lengkapi profil Anda terlebih dahulu.');
}

        return $next($request);
    }
}
