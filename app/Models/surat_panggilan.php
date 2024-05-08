<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_panggilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surat',
        'tgl_panggilan',
        'jam',
        'tempat_panggil',
        'tgl_jbtan',
        'ket_panggil',
        'nama_pemeriksa',
        'id_pegawai',

    ];

    public function pegawais()  
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
