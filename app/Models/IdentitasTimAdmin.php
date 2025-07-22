<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentitasTimAdmin extends Model
{
    protected $table = 'identitas_tim_admin';

    protected $fillable = [
        'pengguna_id', 'nip', 'pangkat', 'jabatan', 'foto'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
