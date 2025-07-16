<?php

class IdentitasPengguna extends Model
{
    protected $table = 'identitas_pengguna';

    protected $fillable = [
        'pengguna_id',
        'nama',
        'email',
        'nama_perusahaan',
        'email_perusahaan',
        'penanggung_jawab',
        'kode_kbli',
        'judul_kbli',
        'nomorhp',
        'alamatusaha',
        'nomor_induk_berusaha',
        'nomor_pokok_wajib_pajak'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
