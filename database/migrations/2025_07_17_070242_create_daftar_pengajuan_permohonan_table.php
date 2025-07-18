<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    Schema::create('daftar_pengajuan_permohonan', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pengguna_id')->constrained('pengguna')->onDelete('cascade');
    $table->string('nomor_pengajuan');
    $table->string('jenis_pembangkit');
    $table->string('jaringan_distribusi')->nullable();
    $table->string('sambungan_dari_pihak_lain')->nullable();
    $table->string('nama_jalan')->nullable();
    $table->string('desa_kelurahan')->nullable();
    $table->string('kecamatan')->nullable();
    $table->string('kabupaten_kota')->nullable();
    $table->string('provinsi')->nullable();
    $table->string('printout_nib')->nullable();
    $table->string('ktp_penanggung_jawab')->nullable();
    $table->string('npwp')->nullable();
    $table->string('gambar_situasi')->nullable();
    $table->string('bukti_pembayaran')->nullable();
    $table->string('foto_papan_nama_generator')->nullable();
    $table->string('foto_papan_nama_mesin_pengerak')->nullable();
    $table->string('status_pengajuan')->default('menunggu');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_pengajuan_permohonan');
    }
};
