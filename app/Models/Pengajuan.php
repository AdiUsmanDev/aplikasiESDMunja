<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pengguna;
use App\Models\EvaluasiDetail;

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
  
   public function pengguna()
{
    return $this->belongsTo(Pengguna::class, 'pengaju_id');
}
public function evaluasi()
{
    return $this->hasMany(EvaluasiDetail::class, 'id_pengajuan');
}
}
