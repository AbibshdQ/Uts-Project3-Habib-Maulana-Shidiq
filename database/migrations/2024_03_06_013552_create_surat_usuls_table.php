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
        Schema::create('surat_usuls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_surat',18);
            $table->date('tgl_usulan');
            $table->string('pengusul',50);
            $table->string('alasan_usul',50);
            $table->string('jabatan_lama',20);
            $table->string('jabatan_baru',20);
            $table->string('status_usulan',25);
            $table->unsignedInteger('id_pegawai');
            $table->timestamps();
            
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_usuls');
    }
};
