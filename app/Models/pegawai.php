<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'namapeg',
        'j_kel',
        'tgl_lahir',
        'tmpt_lahir',
        'alamat',
        'stat_peg',
        'tgl_masuk'
    ];

    // Relasi dengan Jabatan
    public function jabatan()
    {
        return $this->hasOne(Jabatan::class, 'id_jabatan');
    }
}
