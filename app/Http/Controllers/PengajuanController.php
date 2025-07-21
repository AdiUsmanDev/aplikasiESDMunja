<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    // Auto generate nomor pengajuan
    private function generateNomorPengajuan()
    {
        $prefix = 'PNJ-' . date('Ymd');
        $count = Pengajuan::whereDate('created_at', today())->count() + 1;
        return $prefix . '-' . str_pad($count, 4, '0', STR_PAD_LEFT);
    }

    // Menyimpan data Surya
    public function storeSurya(Request $request)
    {
    $user = Auth::user(); 

    if (!$user) {
        return response()->json(['message' => 'User belum login'], 401);
    }
        $request->validate([
            'jenis_pembangkit' => 'required|in:surya',
            
        ]);

        $pengajuId = auth()->id();
        $pengajuan = Pengajuan::create([
            'nomor_pengajuan' => $this->generateNomorPengajuan(),
            'pengaju_id' => $pengajuId,
            'jenis_pembangkit' => 'surya',
            'nama_lokasi' => $request->input('addressdes') ?? 'lokasi tidak ditentukan',
            'status' => 'menunggu',
            'data' => $request->except(['pengaju_id', '_token']),
        ]);

        return response()->json(['message' => 'Pengajuan Surya disimpan', 'data' => $pengajuan]);
    }

    // Menyimpan data Non-Surya
    public function storeNonSurya(Request $request)
    {
    $user = Auth::user(); 

    if (!$user) {
        return response()->json(['message' => 'User belum login'], 401);
    }
        $request->validate([
            'jenis_pembangkit' => 'required|in:non surya',
         
        ]);

     $pengajuId = auth()->id();

        $pengajuan = Pengajuan::create([
            'nomor_pengajuan' => $this->generateNomorPengajuan(),
            'pengaju_id' =>   $pengajuId,
            'jenis_pembangkit' => 'non surya',
            'nama_lokasi' => $request->input('addressdes') ?? 'lokasi tidak ditentukan',
            'status' => 'menunggu',
            'data' => $request->except(['pengaju_id', '_token']),
        ]);

        return response()->json(['message' => 'Pengajuan Non-Surya disimpan', 'data' => $pengajuan]);
    }

    // Menampilkan detail pengajuan
    public function show($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return response()->json($pengajuan);
    }

    // Update status
    public function updateStatus($id, Request $request)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->status = $request->input('status');
        $pengajuan->save();

        return response()->json(['message' => 'Status diperbarui', 'data' => $pengajuan]);
    }

   public function nilaimenunggu(Request $request)
    {
          if (!auth()->check()) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }
        $menunggu = Pengajuan::where('pengaju_id', auth()->id())
                     ->where('status', 'menunggu')
                     ->count();
                      return response()->json(['jumlah' =>  $menunggu]);
    }

   public function getHistori()
        {
            $pengajuan = Pengajuan::where('pengaju_id', auth()->id())
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json($pengajuan);
        }

}
