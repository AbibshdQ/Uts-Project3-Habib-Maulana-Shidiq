<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_absen',
        'stat_absen',
        'waktu_tb',
        'id_pegawai',
       
         
    ];

    public function pegawais()  
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
