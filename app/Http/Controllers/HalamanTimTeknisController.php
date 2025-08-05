<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class HalamanTimTeknisController extends Controller
{
    public function show($encryptedId)
    {
    
    try {
        $id = Crypt::decryptString($encryptedId); 
    } catch (\Exception $e) {
        abort(403, 'Link tidak valid atau rusak.');
    }

         $pengajuan = Pengajuan::with(['pengguna.identitas'])
    ->where('id', $id)
    ->firstOrFail();
      
    $data = json_decode($pengajuan->data, true) ?? [];

    // Kelompokkan berdasarkan suffix angka (misalnya _1, _2)
    $units = [];

    foreach ($data as $key => $value) {
        if (preg_match('/^(.*)_(\d+)$/', $key, $matches)) {
            $field = $matches[1];  
            $index = $matches[2];  

            $units[$index][$field] = $value;
        }
    }


       //dd($units);
      // dd($pengajuan->toArray());
  // dd(compact('units', 'pengajuan'));
         return view('halamantimteknis', compact('pengajuan','units'));

       // return "Menampilkan halaman tim teknis untuk ID: " . $id;
    }
}
