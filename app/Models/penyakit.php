<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    use HasFactory;
    protected $table='penyakits'; 
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'kd_penyakit',
        'penyakit',
        'definisi',
        'solusi'
    ];

    
}
