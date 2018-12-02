@extends('layouts.master')

@section('contenido')
    
<form action="{{ route('eliminarCurso') }}" method="POST" role="form">
    {{ csrf_field() }}
    <legend>Elija un Curso</legend>

    <div class="form-group">
        <label for="curso_id">Curso</label>
        <select name="curso_id" id="" class="form-control" required>
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Eliminar</button>

</form>

@endsection