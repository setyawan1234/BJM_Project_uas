<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServisPanggilan extends Model
{
    use HasFactory;
    protected $table='servis_panggilan'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'nope',
        'lokasi',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
