<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitTenagaSuryaController1 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'jenis_pembangkit' => 'required|string',
            'merek' => 'required|string',
            'tipe' => 'required|string',
            'negara_pembuat' => 'required|string',
            'tahun_pembuatan' => 'required|integer',
            'kapasitas_kwp' => 'required|numeric',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'sifat_penggunaan' => 'required|string',

            // Optional
            'panjang_saluran' => 'nullable|numeric',
            'tegangan' => 'nullable|numeric',
            'pihak_lain' => 'nullable|string',
            'daya_tersambung' => 'nullable|numeric',

            // Lokasi
            'nama_jalan' => 'required|string',
            'desa' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',

            // File uploads
            'foto_unit' => 'nullable|image',
            'foto_modul' => 'nullable|image',
            'foto_inverter' => 'nullable|image',
            'nib' => 'nullable|file',
            'ktp' => 'nullable|file',
            'npwp' => 'nullable|file',
            'gambar_situasi' => 'nullable|file',
            'bukti_tagihan' => 'nullable|file',
        ]);

        // Handle file uploads
        foreach (['foto_unit', 'foto_modul', 'foto_inverter', 'nib', 'ktp', 'npwp', 'gambar_situasi', 'bukti_tagihan'] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store("uploads/{$field}", 'public');
            }
        }

        $unit = UnitTenagaSurya::create($data);

        return response()->json([
            'message' => 'Data unit tenaga surya berhasil disimpan.',
            'data' => $unit
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
