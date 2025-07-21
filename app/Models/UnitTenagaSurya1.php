<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitTenagaSurya1 extends Model
{
    
    protected $table = 'unit_tenaga_surya1';

    protected $fillable = [
        'jenis_pembangkit',
        'merek',
        'tipe',
        'negara_pembuat',
        'tahun_pembuatan',
        'kapasitas_kwp',
        'latitude',
        'longitude',
        'sifat_penggunaan',
        'panjang_saluran',
        'tegangan',
        'pihak_lain',
        'daya_tersambung',
        'nama_jalan',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'foto_unit',
        'foto_modul',
        'foto_inverter',
        'nib',
        'ktp',
        'npwp',
        'gambar_situasi',
        'bukti_tagihan',
    ];
}


