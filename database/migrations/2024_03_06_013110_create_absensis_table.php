<?php

use App\Models\pegawai;
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
        Schema::create('absensis', function (Blueprint $table) {
            $table->id('id');
            $table->date('tgl_absen');
            $table->string('stat_absen', 12);
            $table->string('waktu_tb', 12);
            $table->unsignedInteger('id_pegawai');
            $table->timestamps();

            // Relasi ke tabel peg
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
