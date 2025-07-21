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
      Schema::create('pengajuans', function (Blueprint $table) {
        $table->id();
        $table->string('nomor_pengajuan')->unique();
        $table->unsignedBigInteger('pengaju_id'); // id user atau entitas pengaju
        $table->string('jenis_pembangkit'); // 'surya' atau 'non-surya'
        $table->string('nama_lokasi')->nullable(); // dari alamat/koordinat
        $table->string('status')->default('draft'); // pending / verified / rejected
        $table->json('data')->nullable(); // isi lengkap dalam bentuk json
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
