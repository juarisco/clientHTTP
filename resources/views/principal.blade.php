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
        <a href="{{ route('agregarProfesor') }}" class="list-group-item">Agregar Un Profesor</a>
        <a href="{{ route('agregarCurso') }}" class="list-group-item">Agregar un Curso</a>
    </div>

    <div class="list-group">
        <a href="{{ route('elegirEstudiante') }}" class="list-group-item">Actualizar Un Estudiante</a>
        <a href="{{ route('elegirProfesor') }}" class="list-group-item">Actualizar Un Profesor</a>
    </div>

    <div class="list-group">
        <a href="{{ route('seleccionarEstudiante') }}" class="list-group-item">Eliminar Un Estudiante</a>
        <a href="{{ route('seleccionarProfesor') }}" class="list-group-item">Eliminar Un Profesor</a>
    </div>

    <div class="list-group">
        <a href="{{ route('mostrarCursos') }}" class="list-group-item">Obtener los Estudiantes de un Curso</a>
        <a href="{{ route('mostrarProfesores') }}" class="list-group-item">Obtener los Cursos de un Profesor</a>
    </div>

@endsection