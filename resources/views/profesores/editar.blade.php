@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('actualizarProfesor', $profesor->id) }}" method="POST" role="form">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <legend>Ingrese los Datos del Profesor</legend>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ $profesor->nombre }}" required autofocus>
    </div>

    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" name="direccion" value="{{ $profesor->direccion }}" required>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" name="telefono" value="{{ $profesor->telefono }}" required>
    </div>

    <div class="form-group">
        <label for="profesion">Profesión</label>
        <select name="profesion" id="" class="form-control" required>
            <option value="">Por favor seleccione una profesion</option>
            <option value="ingeniería" {{ $profesor->profesion == 'ingeniería' ? 'selected' : '' }}>Ingeniería</option>
            <option value="matemática" {{ $profesor->profesion == 'matemática' ? 'selected' : '' }}>Matemática</option>
            <option value="física" {{ $profesor->profesion == 'física' ? 'selected' : '' }}>Física</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Profesor</button>

</form>

@endsection