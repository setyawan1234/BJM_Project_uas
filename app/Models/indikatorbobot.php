<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indikatorbobot extends Model
{
    use HasFactory;
    protected $table='indikatorbobots'; 
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'nama_indikator',
        'nilai_bobot'
    ];
}
