<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\IdentitasPengguna;

class ProfilController extends Controller
{
    public function form()
    {
        return view('profil.lengkapi');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nama_perusahaan' => 'required',
            'email_perusahaan' => 'required|email',
            'penanggung_jawab' => 'required',
            'kode_kbli' => 'required',
            'judul_kbli' => 'required',
            'nomorhp' => 'required',
            'alamatusaha' => 'required',
            'nomor_induk_berusaha' => 'required',
            'nomor_pokok_wajib_pajak' => 'required',
        ]);

        $user = Auth::user();

        IdentitasPengguna::create([
            'pengguna_id' => $user->id,
            'nama' => $request->nama,
            'email' => $user->email,
            'nama_perusahaan' => $request->nama_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'penanggung_jawab' => $request->penanggung_jawab,
            'kode_kbli' => $request->kode_kbli,
            'judul_kbli' => $request->judul_kbli,
            'nomorhp' => $request->nomorhp,
            'alamatusaha' => $request->alamatusaha,
            'nomor_induk_berusaha' => $request->nomor_induk_berusaha,
            'nomor_pokok_wajib_pajak' => $request->nomor_pokok_wajib_pajak,
        ]);

        return redirect()->route('dashboard')->with('success', 'Profil berhasil dilengkapi.');
    }
}
