@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Agregar Parqueadero</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('parqueaderos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="numero" class="form-label">Número</label>
            <input type="number" class="form-control" id="numero" name="numero" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="Disponible">Disponible</option>
                <option value="Ocupado">Ocupado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('parqueaderos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
    