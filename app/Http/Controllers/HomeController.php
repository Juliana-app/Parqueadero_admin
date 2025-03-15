<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class HomeController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::with('parqueadero')->get(); // Trae los vehículos con su parqueadero
        return view('home', compact('vehiculos'));
    }
}
