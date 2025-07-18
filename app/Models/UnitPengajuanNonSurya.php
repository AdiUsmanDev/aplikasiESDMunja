<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitPengajuanNonSurya extends Model
{
    protected $table = 'unit_pengajuan_non_surya';
    protected $fillable = [
        'pengajuan_id', 'nama_unit', 'jenis_penggerak', 'merek', 'tipe', 'negara_pembuat',
        'tahun_pembuatan', 'kapasitas_kw', 'energi_primer', 'koordinat_latitude',
        'koordinat_longitude', 'sifat_penggunaan'
    ];
}
