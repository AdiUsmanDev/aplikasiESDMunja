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
    Schema::create('unit_tenaga_surya1s', function (Blueprint $table) {
    $table->id();
    $table->string('jenis_pembangkit');
    $table->string('merek');
    $table->string('tipe');
    $table->string('negara_pembuat');
    $table->integer('tahun_pembuatan');
    $table->decimal('kapasitas_kwp', 8, 2);
    $table->decimal('latitude', 10, 6);
    $table->decimal('longitude', 10, 6);
    $table->string('sifat_penggunaan');
    $table->decimal('panjang_saluran', 8, 2)->nullable();
    $table->decimal('tegangan', 8, 2)->nullable();
    $table->string('pihak_lain')->nullable();
    $table->decimal('daya_tersambung', 8, 2)->nullable();
    $table->string('nama_jalan');
    $table->string('desa');
    $table->string('kecamatan');
    $table->string('kabupaten');
    $table->string('provinsi');
    $table->string('foto_unit')->nullable();
    $table->string('foto_modul')->nullable();
    $table->string('foto_inverter')->nullable();
    $table->string('nib')->nullable();
    $table->string('ktp')->nullable();
    $table->string('npwp')->nullable();
    $table->string('gambar_situasi')->nullable();
    $table->string('bukti_tagihan')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_tenaga_surya1s');
    }
};
