<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluasiDetail;
use App\Models\Pengajuan; // Pastikan ini ada

class EvaluasiDetailController extends Controller
{
    public function store(Request $request)
    {
       // dd($request->all());
      
        $validated = $request->validate([
        'id_pengajuan' => 'required|integer',
        'evaluasi' => 'required|array',
        'evaluasi.*.id_perbaikan' => 'required|integer',
        'evaluasi.*.catatan' => 'nullable|string',
        'evaluasi.*.status' => 'required|string',
        'catatan' => 'nullable|string',
    ]);

    $evaluasi = EvaluasiDetail::create([
        'id_pengajuan' => $validated['id_pengajuan'],
        'evaluasi' => $validated['evaluasi'], // array otomatis disimpan sebagai JSON
        'catatan' => $validated['catatan'] ?? null,
        'status' => 'menunggu perbaikan'
    ]);



    Pengajuan::where('id', $validated['id_pengajuan'])->update([
    'status' => 'perbaikan'
    ]);

    return response()->json(['success' => true, 'data' => $evaluasi]);

     
    }
 
   public function show($id_laporan)
    {
       // dd($request->all());
      

    $data = EvaluasiDetail::where('id_pengajuan', $id_laporan)->first();

        if (!$data) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        // Kirim ke view (jika ingin tampilkan HTML)
        //return view('evaluasi.detail', ['data' => $data]);
        
        // Atau kirim sebagai JSON (untuk konsumsi JS/REST API)
         return response()->json($data);
    }





}
