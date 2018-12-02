@extends('layouts.master')

@section('contenido')
    
    @if (sizeof($cursos)>0)
    @if (sizeof($estudiantes)>0)
        <form action="{{ route('agregarEstudianteCurso') }}" method="post">
            {{ csrf_field() }}
            <legend>Seleccione un Curso y un Estudiante</legend>

            <div class="form-group">
                <label for="curso">Curso</label>
                <select name="curso_id" id="" class="form-control" required>
                    <option value="">Seleccione un curso</option>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="estudiante">Estudiante</label>
                <select name="estudiante_id" id="" class="form-control" required>
                    <option value="">Seleccione un estudiante</option>
                    @foreach ($estudiantes as $estudiante)
                        <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar Estudiante al Curso</button>

        </form>
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ups</strong>
            No hay estudiantes en este momento
        </div>
    @endif

    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ups</strong>
            No hay cursos en este momento
        </div>
    @endif

@endsection