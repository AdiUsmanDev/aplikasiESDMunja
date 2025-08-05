<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Pengajuan;

class EvaluasiDetail extends Model
{
    protected $table = 'evaluasi_details';

    protected $fillable = [
        'id_pengajuan',
        'evaluasi',
        'catatan',
        'status'
    ];

    protected $casts = [
        'evaluasi' => 'array', 
    ];

   public function pengajuan()
{
    return $this->belongsTo(Pengajuan::class, 'id_pengajuan');
}

}
