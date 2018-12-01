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
}
