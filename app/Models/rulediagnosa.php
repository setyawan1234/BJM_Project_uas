<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rulediagnosa extends Model
{
    use HasFactory;
    protected $table='rulediagnosas'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'id',
        'penyakits_id',
        'gejalas_id',
        'indikatorbobots_id',
        'kd_penyakit',
        'nilai_bobot',
        'kd_gejala'
    ];
    public function penyakit()
    {
        return $this->hasOne(penyakit::class, 'id', 'penyakits_id');
    }

    public function gejala()
    {
        return $this->hasOne(gejala::class, 'id', 'gejalas_id');
    }

    public function indikatorbobot()
    {
        return $this->hasOne(indikatorbobot::class, 'id', 'indikatorbobots_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
