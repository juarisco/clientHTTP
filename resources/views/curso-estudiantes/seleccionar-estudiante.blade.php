@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('eliminarEstudianteCurso') }}" method="POST" role="form">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="hidden" name="curso_id" value="{{ $cursoId }}">
    
    <legend>Elija un Estudiante</legend>

    <div class="form-group">
        <label for="estudiante_id">Estudiante</label>
        <select name="estudiante_id" id="" class="form-control" required>
                <option value="">Por favor elija un estudiante</option>
            @foreach ($estudiantes as $estudiante)
                <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Eliminar Estudiante del Curso</button>

</form>

@endsection