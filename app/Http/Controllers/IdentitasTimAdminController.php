<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\IdentitasTimAdmin;

class IdentitasTimAdminController extends Controller
{

    public function showProfile()
    {
       $profile = IdentitasTimAdmin::with('pengguna')->where('pengguna_id', Auth::id())->first();
        // dd($profile);
        return view('profileteknis', compact('profile'));
    }
    public function edit()
    {
        $user = Auth::user();
        return view('tim_admin.edit', [
            'user' => $user,
            'identitas' => $user->identitasTimAdmin,
        ]);
    }

    public function update(Request $request)
    {

//dd($request->all());
        
        $request->validate([
            
            'nip' => 'nullable|digits:18',
            'pangkat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = Auth::user();
           $data2 = IdentitasTimAdmin::where('pengguna_id', Auth::id())->first();

        $identitas = $user->identitasTimAdmin;

        $data = $request->except(['_token', 'foto']);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($identitas && $identitas->foto) {
                Storage::disk('public')->delete($identitas->foto);
            }

            $data['foto'] = $request->file('foto')->store('foto-admin', 'public');
        }


         //dd($data);
       $result = IdentitasTimAdmin::updateOrCreate(
            ['pengguna_id' => $user->id],
            $data
        );


        $identitas->pengguna->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

       // dd($result);
       

        return redirect()->back()->with('alert', [
                'type' => 'success',
                'message' => 'Profil berhasil di disimpan!'
            ]);
    }
}

