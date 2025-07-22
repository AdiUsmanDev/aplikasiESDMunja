<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\IdentitasPengguna;

class ProfilController extends Controller
{
    public function form()
{
    $user = Auth::user();
    $identitas = IdentitasPengguna::where('pengguna_id', $user->id)->first();
    return view('profile', compact('identitas'));
 
}

public function simpan(Request $request)
{
   
    $user = Auth::user();
    $request->validate([
        'nama' => 'required|string|max:255',
        'nama_perusahaan' => 'required|string|max:255',
        'email_perusahaan' => 'required|email',
        'penanggung_jawab' => 'required|string',
        'kode_kbli' => 'required|string',
        'judul_kbli' => 'required|string',
        'nomorhp' => 'required|string',
        'alamatusaha' => 'required|string',
        'nomor_induk_berusaha' => 'required|string',
        'nomor_pokok_wajib_pajak' => 'required|string',
    ]);


$user->identitas()->updateOrCreate(
        ['pengguna_id' => $user->id],
        [
            'nama' => $request->nama,
            'email' => $request->email,
            'nama_perusahaan' => $request->nama_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'penanggung_jawab' => $request->penanggung_jawab,
            'kode_kbli' => $request->kode_kbli,
            'judul_kbli' => $request->judul_kbli,
            'nomorhp' => $request->nomorhp,
            'alamatusaha' => $request->alamatusaha,
            'nomor_induk_berusaha' => $request->nomor_induk_berusaha,
            'nomor_pokok_wajib_pajak' => $request->nomor_pokok_wajib_pajak,
        ]
    );

         
        $user->update([
            'name' => $request->input('nama'),
        ]);

    return redirect()->route('profile')->with('success', 'Profil berhasil disimpan.');
}

}
