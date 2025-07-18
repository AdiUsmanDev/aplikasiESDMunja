<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarPengajuan extends Model
{
    protected $table = 'daftar_pengajuan_permohonan';
    protected $fillable = [
        'pengguna_id', 'nomor_pengajuan', 'jenis_pembangkit', 'jaringan_distribusi',
        'sambungan_dari_pihak_lain', 'nama_jalan', 'desa_kelurahan', 'kecamatan',
        'kabupaten_kota', 'provinsi', 'printout_nib', 'ktp_penanggung_jawab',
        'npwp', 'gambar_situasi', 'bukti_pembayaran', 'foto_papan_nama_generator',
        'foto_papan_nama_mesin_pengerak', 'status_pengajuan'
    ];

    public function unitSurya() {
        return $this->hasOne(UnitTenagaSurya::class, 'pengajuan_id');
    }

    public function unitNonSurya() {
        return $this->hasOne(UnitPengajuanNonSurya::class, 'pengajuan_id');
    }
}
