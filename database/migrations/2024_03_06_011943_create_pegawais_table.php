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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('namapeg',50);
            $table->string('j_kel',10);
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir', 50);
            $table->string('alamat',100);
            $table->string('stat_peg', 25);
            $table->date('tgl_masuk');
            // $table->unsignedInteger('id_jabatan'); // Merujuk ke kolom 'id' di tabel 'jabatans'
            $table->timestamps();

            // //relasi
            // $table->foreign('id_jabatan')->references('id')->on('jabatans'); // Merujuk ke kolom 'id' di tabel 'jabatans'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
