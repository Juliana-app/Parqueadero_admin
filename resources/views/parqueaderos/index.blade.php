@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Parqueaderos</h1>
    <a href="{{ route('parqueaderos.create') }}" class="btn btn-primary mb-3">Agregar Parqueadero</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Número</th>
                <th>Dirección</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parqueaderos as $parqueadero)
            <tr>
                <td>{{ $parqueadero->id }}</td>
                <td>{{ $parqueadero->nombre }}</td>
                <td>{{ $parqueadero->numero }}</td>
                <td>{{ $parqueadero->direccion }}</td>
                <td>{{ $parqueadero->estado }}</td>
                <td>
                    <a href="{{ route('parqueaderos.edit', $parqueadero->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('parqueaderos.destroy', $parqueadero->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
