@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Vehículos</h1>

    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary mb-3">Agregar Vehículo</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Fabricante</th>
                <th>País</th>
                <th>Parqueadero</th>
                <th>Acciones</th>
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
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este vehículo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
