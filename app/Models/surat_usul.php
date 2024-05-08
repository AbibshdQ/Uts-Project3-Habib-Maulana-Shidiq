<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_usul extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surat', 
        'tgl_usulan', 
        'pengusul', 
        'alasan_usul', 
        'jabatan_lama', 
        'jabatan_baru', 
        'status_usulan', 
        'id_pegawai',

    ];

    public function pegawais()  
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
