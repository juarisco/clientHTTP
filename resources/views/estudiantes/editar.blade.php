@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('actualizarEstudiante', $estudiante->id) }}" method="POST" role="form">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <legend>Ingrese los Datos del Estudiante</legend>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ $estudiante->nombre }}" required autofocus>
    </div>

    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" name="direccion" value="{{ $estudiante->direccion }}" required>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" name="telefono" value="{{ $estudiante->telefono }}" required>
    </div>

    <div class="form-group">
        <label for="carrera">Carrera</label>
        <select name="carrera" id="" class="form-control" required>
            <option value="">Por favor seleccione una carrera</option>
            <option value="ingeniería" {{ $estudiante->carrera == 'ingeniería' ? 'selected' : '' }}>Ingeniería</option>
            <option value="matemática" {{ $estudiante->carrera == 'matemática' ? 'selected' : '' }}>Matemática</option>
            <option value="física" {{ $estudiante->carrera == 'física' ? 'selected' : '' }}>Física</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Estudiante</button>

</form>

@endsection