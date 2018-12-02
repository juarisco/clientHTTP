@extends('layouts.master')

@section('contenido')
    
    @if (sizeof($profesores)>0)
        
        <form action="{{ route('crearCurso') }}" method="post">
            {{ csrf_field() }}
            <legend>Crear un Curso</legend>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control" required autofocus>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" name="valor" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="profesor">Profesor</label>
                <select name="profesor_id" id="" class="form-control" required>
                    <option value="">Seleccione un profesor</option>
                    @foreach ($profesores as $profesor)
                        <option value="{{ $profesor->id }}">{{ $profesor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear Curso</button>

        </form>
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ups</strong>
            No hay profesores en este momento para crear un curso
        </div>
    @endif

@endsection