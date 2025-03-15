<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'modelo', 'fabricante', 'pais', 'idParqueadero'];

    public function parqueadero()
    {
        return $this->belongsTo(Parqueadero::class, 'idParqueadero');
    }
}
