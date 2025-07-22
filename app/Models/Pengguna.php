<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna'; 

    protected $fillable = [
        'name',
        'email',
        'password',
        'provider',
        'provider_id',
        'role'
    ];

     public function identitas()
    {
        return $this->hasOne(IdentitasPengguna::class, 'pengguna_id');
    }
    public function identitasTimAdmin()
    {
        return $this->hasOne(IdentitasTimAdmin::class,'pengguna_id');
    }

}
