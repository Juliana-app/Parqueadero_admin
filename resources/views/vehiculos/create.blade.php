@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Agregar Vehículo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo (Año)</label>
            <input type="number" class="form-control" id="modelo" name="modelo" required>
        </div>

        <div class="mb-3">
            <label for="fabricante" class="form-label">Fabricante</label>
            <input type="text" class="form-control" id="fabricante" name="fabricante" required>
        </div>

        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <input type="text" class="form-control" id="pais" name="pais" required>
        </div>

        <div class="mb-3">
            <label for="idParqueadero" class="form-label">Parqueadero</label>
            <select class="form-control" id="idParqueadero" name="idParqueadero" required>
                <option value="">Seleccione un parqueadero</option>
                @foreach ($parqueaderos as $parqueadero)
                    <option value="{{ $parqueadero->id }}">{{ $parqueadero->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
