<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $fillable = [
        'nomor_pengajuan',
        'pengaju_id',
        'jenis_pembangkit',
        'nama_lokasi',
        'status',
        'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];
}
