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
       
       return 'PNJ-' . now()->format('YmdHis') . '-' . rand(1000, 9999);
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

         $data =  $request->except(['pengaju_id', '_token']);
         
        foreach ($request->files as $key => $file) {
        if ($file->isValid()) {
            $path = $file->store('file-pengajuan', 'public'); 
            $data[$key] = $path; 
        }
    }

        $pengajuId = auth()->id();
        $pengajuan = Pengajuan::create([
            'nomor_pengajuan' => $this->generateNomorPengajuan(),
            'pengaju_id' => $pengajuId,
            'jenis_pembangkit' => 'surya',
            'nama_lokasi' => $request->input('addressdes') ?? 'lokasi tidak ditentukan',
            'status' => 'menunggu',
            'data' => $data,
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
           $pengajuan = Pengajuan::with(['evaluasi']) // ini akan ikut menyertakan semua evaluasi
                ->where('pengaju_id', auth()->id())
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json($pengajuan);
        }


            public function daftarPengajuanMasuk()
            {  
$pengajuan = Pengajuan::with(['pengguna.identitas'])
                    ->orderBy('created_at', 'desc')
                    ->get();

    return response()->json($pengajuan, 200, [], JSON_PRETTY_PRINT);
            }

public function uploadFile(Request $request){ 
     $nomor = $request->input('nomor_pengajuan');
$pengajuId = auth()->id();
$pengajuan = Pengajuan::where('pengaju_id', auth()->id())
                      ->where('nomor_pengajuan', $nomor)
                      ->firstOrFail();

$dataLama = $pengajuan->data;

// Jika datanya sudah array, langsung pakai
if (!is_array($dataLama)) {
    $dataLama = json_decode($dataLama ?? '{}', true);
}

// Jika decode gagal atau hasilnya bukan array, fallback ke array kosong
$dataLama = is_array($dataLama) ? $dataLama : [];

$uploaded = [];

foreach ($request->allFiles() as $field => $file) {
    if (is_array($file)) {
        $uploaded[$field] = [];
        foreach ($file as $index => $singleFile) {
            $path = $singleFile->store('uploads');
            $uploaded[$field][$index] = $path;
        }
        if (\Schema::hasColumn('pengajuans', $field)) {
            $pengajuan->{$field} = json_encode($uploaded[$field]);
        }
    } else {
        $path = $file->store('uploads');
        $uploaded[$field] = $path;
        if (\Schema::hasColumn('pengajuans', $field)) {
            $pengajuan->{$field} = $path;
        }
    }

    $dataLama[$field] = $uploaded[$field];
}

$pengajuan->data = json_encode($dataLama);
$pengajuan->save();

return response()->json([
    'message' => 'Semua file berhasil diupload',
    'files' => $uploaded,
]);

}



}
