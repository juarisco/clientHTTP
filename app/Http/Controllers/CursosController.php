<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;
use ClienteHTTP\Http\Requests\unicoRequest;

class CursosController extends ClienteController
{
    public function mostrarCursos()
    {
        $cursos = $this->obtenerTodosLosCursos();

        return view('cursos.todos', ['cursos' => $cursos]);
    }

    public function mostrarCurso()
    {
        return view('cursos.unico');
    }

    public function obtenercurso(unicoRequest $request)
    {
        $id = $request->id;
        $curso = $this->obtenerUnCurso($id);

        return view('cursos.mostrar', ['curso' => $curso]);
    }


}
