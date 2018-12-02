<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorCursosController extends ClienteController
{
    public function mostrarProfesores()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesor-cursos.profesores', ['profesores' => $profesores]);
    }

    public function mostrarCursosProfesor(Request $request)
    {
        $profesorId = $request->profesor_id;

        $cursos = $this->obtenerCursosProfesor($profesorId);

        return view('profesor-cursos.cursos', ['cursos' => $cursos]);
    }

    public function agregarCurso()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesor-cursos.agregar', ['profesores' => $profesores]);


    }

    public function crearCurso(Request $request)
    {
        $this->almacenarCurso($request);

        return redirect()->route('cursos');
    }

    public function elegirCurso()
    {
        $cursos = $this->obtenerTodosLosCursos();

        return view('profesor-cursos.todos', ['cursos' => $cursos]);
    }

    public function editarCurso(Request $request)
    {
        $idCurso = $request->curso_id;

        $curso = $this->obtenerUnCurso($idCurso);
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesor-cursos.editar', ['curso' => $curso, 'profesores' => $profesores]);

    }

    public function actualizarCurso(Request $request, $id)
    {
        $this->modificarCurso($request, $id);

        return redirect()->route('cursos');
    }
}
