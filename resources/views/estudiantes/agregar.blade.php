@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('agregarEstudiante') }}" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Ingrese los Datos del Estudiante</legend>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" required autofocus>
    </div>

    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" name="direccion" required>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" name="telefono" required>
    </div>

    <div class="form-group">
        <label for="carrera">Carrera</label>
        <select name="carrera" id="" class="form-control" required>
            <option value="">Por favor seleccione una carrera</option>
            <option value="ingeniería">Ingeniería</option>
            <option value="matemática">Matemática</option>
            <option value="física">Física</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Crear Estudiante</button>

</form>

@endsection