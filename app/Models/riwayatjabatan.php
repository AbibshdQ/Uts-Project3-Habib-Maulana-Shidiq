<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatjabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'golongan_jab',
        'riwayat_jab',
        'tgl_skpertama',
        'tgl_skterakhir',
        
    ];
}
