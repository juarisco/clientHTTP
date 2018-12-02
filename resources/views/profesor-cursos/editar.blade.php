@extends('layouts.master')

@section('contenido')
    
    @if (sizeof($profesores)>0)
        
        <form action="{{ route('actualizarCurso', $curso->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            {{-- <input type="hidden" name="curso_id" class="form-control" value="{{ $curso->id }}"> --}}

            <legend>Crear un Curso</legend>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control" value="{{ $curso->titulo }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="{{ $curso->descripcion }}" required>
            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" name="valor" class="form-control" value="{{ $curso->valor }}" required>
            </div>

            <div class="form-group">
                <label for="profesor">Profesor</label>
                <select name="profesor_id" id="" class="form-control" required>
                    <option value="">Seleccione un profesor</option>
                    @foreach ($profesores as $profesor)
                        <option value="{{ $profesor->id }}" {{ $profesor->id === $curso->profesor_id ? 'selected' : '' }}>{{ $profesor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Editar Curso</button>

        </form>
    @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Ups</strong>
            No hay profesores en este momento para editar un curso
        </div>
    @endif

@endsection