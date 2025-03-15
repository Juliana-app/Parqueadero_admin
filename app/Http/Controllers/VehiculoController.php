<?php
namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Parqueadero;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::with('parqueadero')->get();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        $parqueaderos = Parqueadero::all();
        return view('vehiculos.create', compact('parqueaderos'));
    }

    public function store(Request $request)
    {
        Vehiculo::create($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function edit(Vehiculo $vehiculo)
    {
        $parqueaderos = Parqueadero::all();
        return view('vehiculos.edit', compact('vehiculo', 'parqueaderos'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.index');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index');
    }
}
