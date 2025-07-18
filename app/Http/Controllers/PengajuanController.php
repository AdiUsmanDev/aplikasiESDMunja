<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\DaftarPengajuanPermohonan;
use App\Models\UnitTenagaSurya;
use App\Models\UnitPengajuanNonSurya;
use Carbon\Carbon;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('pengajuan.form'); // pastikan file ini ada: resources/views/pengajuan/form.blade.php
    }

    public function store(Request $request)
    {
        // dd($request->all()); // Debug awal untuk melihat isian form


    $today = Carbon::now()->format('Ymd');

    $countToday = DB::table('daftar_pengajuan_permohonan')
        ->whereDate('created_at', Carbon::today())
        ->count();

    $urut = str_pad($countToday + 1, 4, '0', STR_PAD_LEFT);
    $nomor_pengajuan = 'PJN-' . $today . '-' . $urut;

        dd($request->all());
        $request->validate([
            'jenis_pengajuan' => 'required',
            'nama_unit' => 'required',
            'merek' => 'required',
            'tipe' => 'required',
            'tahun_pembuatan' => 'required|integer',
            'kapasitas' => 'required|numeric',
            'koordinat_latitude' => 'required|numeric',
            'koordinat_longitude' => 'required|numeric',
            'sifat_penggunaan' => 'required',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
        ]);

        // Simpan file (kalau ada)
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('berkas', 'public');
        }

        // Simpan ke tabel utama
        $pengajuan = DaftarPengajuanPermohonan::create([
            'nomor_pengajuan' => $nomor_pengajuan,
            'jenis_pengajuan' => $request->jenis_pengajuan,
            'file_url' => $filePath ? Storage::url($filePath) : null,
        ]);

        // Simpan ke tabel detail
        if ($request->jenis_pengajuan === 'surya') {
            $unit = UnitTenagaSurya::create([
                'pengajuan_id' => $pengajuan->id,
                'nama_unit' => $request->nama_unit,
                'merek' => $request->merek,
                'tipe' => $request->tipe,
                'negara_pembuat' => $request->negara_pembuat,
                'tahun_pembuatan' => $request->tahun_pembuatan,
                'kapasitas_kwp' => $request->kapasitas,
                'koordinat_latitude' => $request->koordinat_latitude,
                'koordinat_longitude' => $request->koordinat_longitude,
                'sifat_penggunaan' => $request->sifat_penggunaan,
            ]);
        } else {
            $unit = UnitPengajuanNonSurya::create([
                'pengajuan_id' => $pengajuan->id,
                'nama_unit' => $request->nama_unit,
                'jenis_penggerak' => $request->jenis_penggerak,
                'merek' => $request->merek,
                'tipe' => $request->tipe,
                'negara_pembuat' => $request->negara_pembuat,
                'tahun_pembuatan' => $request->tahun_pembuatan,
                'kapasitas_kw' => $request->kapasitas,
                'energi_primer' => $request->energi_primer,
                'koordinat_latitude' => $request->koordinat_latitude,
                'koordinat_longitude' => $request->koordinat_longitude,
                'sifat_penggunaan' => $request->sifat_penggunaan,
            ]);
        }

        // Debug tampilan hasil
    
    }
}
