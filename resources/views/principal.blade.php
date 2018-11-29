@extends('layouts.master')

@section('contenido')
    
<div class="list-group">
        <a href="{{ route('estudiantes') }}" class="list-group-item">Obtener Todos los Estudiantes</a>
        <a href="{{ route('profesores') }}" class="list-group-item">Obtener Todos los Profesores</a>
        <a href="{{ route('cursos') }}" class="list-group-item">Obtener Todos los Cursos</a>
    </div>
    <div class="list-group">
        <a href="{{ route('estudiante') }}" class="list-group-item">Obtener Un Estudiante</a>
        <a href="{{ route('profesor') }}" class="list-group-item">Obtener Un Profesor</a>
        <a href="{{ route('curso') }}" class="list-group-item">Obtener Un Curso</a>
    </div>
    <div class="list-group">
        <a href="{{ route('agregarEstudiante') }}" class="list-group-item">Agregar Un Estudiante</a>
    </div>
</div>

@endsection