<?php

namespace App\Http\Controllers;

use App\Models\Parqueadero;
use Illuminate\Http\Request;

class ParqueaderoController extends Controller
{
    public function index()
    {
        $parqueaderos = Parqueadero::all();
        return view('parqueaderos.index', compact('parqueaderos'));
    }

    public function create()
    {
        return view('parqueaderos.create');
    }

    public function store(Request $request)
    {
        Parqueadero::create($request->all());
        return redirect()->route('parqueaderos.index')->with('success', 'Parqueadero agregado correctamente.');
    }

    public function edit(Parqueadero $parqueadero)
    {
        return view('parqueaderos.edit', compact('parqueadero'));
    }

    public function update(Request $request, Parqueadero $parqueadero)
    {
        $parqueadero->update($request->all());
        return redirect()->route('parqueaderos.index')->with('success', 'Parqueadero actualizado correctamente.');
    }

    public function destroy(Parqueadero $parqueadero)
    {
        $parqueadero->delete();
        return redirect()->route('parqueaderos.index')->with('success', 'Parqueadero eliminado correctamente.');
    }
}
