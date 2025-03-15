<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'numero', 'direccion', 'estado'];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class, 'idParqueadero');
    }
}
