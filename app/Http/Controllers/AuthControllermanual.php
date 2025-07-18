<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;
use App\Models\IdentitasPengguna; // ✅ Pastikan ini di-import

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
            'role'         => 'pengguna', 
        ]);

        Auth::login($user);

        // ✅ Buat identitas_pengguna default setelah login
        $this->createDefaultIdentitas($user);

        return redirect('/dashboarduser');
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
            $user = Auth::user();

            // ✅ Buat identitas_pengguna default setelah login
            $this->createDefaultIdentitas($user);

            return redirect('/dashboarduser');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // ✅ Fungsi reusable untuk membuat identitas default
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
