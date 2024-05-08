<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'besaran',
        'bonus',
        'jabatan_id',
        
         
    ];

    public function jabatans()  
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
    
}
