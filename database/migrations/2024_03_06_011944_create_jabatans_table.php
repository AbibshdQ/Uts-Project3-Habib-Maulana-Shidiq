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
        Schema::create('jabatans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jab', 50);
            $table->date('awal_jab');
            $table->date('akhir_jab');
            // $table->string('tunjangan');
            $table->unsignedInteger('id_pegawai');

            $table->timestamps();

            //relasi
            $table->foreign('id_pegawai')->references('id')->on('pegawais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jabatans');
    }
};
