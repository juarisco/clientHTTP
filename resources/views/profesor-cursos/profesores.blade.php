@extends('layouts.master')

@section('contenido')
    
    @if (sizeof($profesores)>0)
        
        <form action="{{ route('mostrarCursosProfesor') }}" method="post">
            {{ csrf_field() }}
            <legend>Seleccione un Profesor</legend>

            <div class="form-group">

                <label for="profesor">Profesor</label>
                <select name="profesor_id" id="" class="form-control" required>
                    <option value="">Seleccione un profesor</option>
                    @foreach ($profesores as $profesor)
                        <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn btn-primary">Obtener Cursos</button>

        </form>
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ups</strong>
            No hay profesores en este momento
        </div>
    @endif

@endsection