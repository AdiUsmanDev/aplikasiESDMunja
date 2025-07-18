<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitTenagaSurya extends Model
{
    protected $table = 'unit_tenaga_surya';
    protected $fillable = [
        'pengajuan_id', 'nama_unit', 'merek', 'tipe', 'negara_pembuat',
        'tahun_pembuatan', 'kapasitas_kwp', 'koordinat_latitude', 'koordinat_longitude',
        'sifat_penggunaan'
    ];
}
