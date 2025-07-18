<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Socialite;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use App\Models\IdentitasPengguna;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $role = 'pengguna';

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
        
        $this->createDefaultIdentitas($user);

        Auth::login($user);

        return redirect('/dashboarduser');
    }

     protected function createDefaultIdentitas($user)
    {
        if (!$user->identitas) {
            IdentitasPengguna::create([
                'pengguna_id' => $user->id,
                'nama' => $user->name ?? 'Belum diisi',
                'email' => $user->email,
                'nama_perusahaan' => '',
                'email_perusahaan' => '',
                'penanggung_jawab' => '',
                'kode_kbli' => '',
                'judul_kbli' => '',
                'nomorhp' => '',
                'alamatusaha' => '',
                'nomor_induk_berusaha' => '',
                'nomor_pokok_wajib_pajak' => '',
            ]);
        }
    }
}
