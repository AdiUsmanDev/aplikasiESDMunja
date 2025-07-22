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
        Schema::create('identitas_tim_admin', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('pengguna_id')->unique();
        $table->string('nip', 18)->nullable();
        $table->string('pangkat')->nullable();
        $table->string('jabatan')->nullable();
        $table->string('foto')->nullable();
        $table->timestamps();

        $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas_tim_admin');
    }
};
