@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('eliminarProfesor') }}" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Elija un Profesor</legend>

    <div class="form-group">
        <label for="profesor_id">Profesor</label>
        <select name="profesor_id" id="" class="form-control" required>
            <option value="">Por favor elija un profesor</option>
            @foreach ($profesores as $profesor)
                <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Eliminar</button>

</form>

@endsection