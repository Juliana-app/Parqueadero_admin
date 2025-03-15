@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Dashboard</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('vehiculos.index') }}" class="btn btn-primary me-2">Vehículos</a>
        <a href="{{ route('parqueaderos.index') }}" class="btn btn-secondary">Parqueaderos</a>
    </div>

    <h3>Lista de Vehículos en Parqueaderos</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Fabricante</th>
                <th>País</th>
                <th>Parqueadero</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->nombre }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->fabricante }}</td>
                    <td>{{ $vehiculo->pais }}</td>
                    <td>{{ $vehiculo->parqueadero->nombre ?? 'Sin asignar' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
