<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_jab',
        'awal_jab',
        'akhir_jab',
        'id_pegawai',
    ];

    // Relasi dengan Pegawai
    public function pegawais()  
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    // public function kelas(): HasOne
    // {
    //     return $this->hasOne(Kelas::class, 'nip');
    // }
}
