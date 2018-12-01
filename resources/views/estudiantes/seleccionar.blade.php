@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('eliminarEstudiante') }}" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Elija un Estudiante</legend>

    <div class="form-group">
        <label for="estudiante_id">Estudiante</label>
        <select name="estudiante_id" id="" class="form-control" required>
            @foreach ($estudiantes as $estudiante)
                <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Eliminar</button>

</form>

@endsection