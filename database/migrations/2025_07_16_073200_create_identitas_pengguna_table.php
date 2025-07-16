<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('identitas_pengguna', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengguna_id')->constrained('pengguna')->onDelete('cascade');
            $table->string('nama');
            $table->string('email');
            $table->string('nama_perusahaan');
            $table->string('email_perusahaan');
            $table->string('penanggung_jawab');
            $table->string('kode_kbli');
            $table->string('judul_kbli');
            $table->string('nomorhp');
            $table->string('alamatusaha');
            $table->string('nomor_induk_berusaha');
            $table->string('nomor_pokok_wajib_pajak');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('identitas_pengguna');
    }
};
