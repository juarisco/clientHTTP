@extends('layouts.master')

@section('contenido')
    
    @if (sizeof($cursos)>0)
        
        <form action="{{ route('editarCurso') }}" method="post">
            {{ csrf_field() }}
            <legend>Seleccione un Curso</legend>

            <div class="form-group">

                <label for="curso">Curso</label>
                <select name="curso_id" id="" class="form-control" required>
                    <option value="">Seleccione un curso</option>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                    @endforeach
                </select>

            </div>

            <button type="submit" class="btn btn-primary">Editar Curso</button>

        </form>
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ups</strong>
            No hay profesores en este momento
        </div>
    @endif

@endsection