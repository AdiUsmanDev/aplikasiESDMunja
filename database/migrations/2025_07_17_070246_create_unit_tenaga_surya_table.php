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
    Schema::create('unit_tenaga_surya', function (Blueprint $table) {
    $table->id();
    $table->foreignId('pengajuan_id')->constrained('daftar_pengajuan_permohonan')->onDelete('cascade');
    $table->string('nama_unit');
    $table->string('merek');
    $table->string('tipe');
    $table->string('negara_pembuat');
    $table->integer('tahun_pembuatan');
    $table->decimal('kapasitas_kwp');
    $table->decimal('koordinat_latitude', 10, 7);
    $table->decimal('koordinat_longitude', 10, 7);
    $table->string('sifat_penggunaan');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_tenaga_surya');
    }
};
