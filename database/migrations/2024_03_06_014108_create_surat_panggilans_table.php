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
        Schema::create('surat_panggilans', function (Blueprint $table) {
            $table->id('id');
            $table->integer('no_surat');
            $table->date('tgl_panggilan');
            $table->integer('jam');
            $table->string('tempat_panggil', 50);
            $table->date('tgl_jbtan');
            $table->string('ket_panggil', 30);
            $table->string('nama_pemeriksa',25 );
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
        Schema::dropIfExists('surat_panggilans');
    }
};
