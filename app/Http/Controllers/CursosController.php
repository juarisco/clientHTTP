<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;
use ClienteHTTP\Http\Requests\unicoRequest;

class CursosController extends Controller
{
    public function mostrarCursos()
    {
        $cursos = $this->obtenerTodosLosCursos();

        return view('cursos.todos', ['cursos' => $cursos]);
    }

    public function obtenerTodosLosCursos()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/cursos');

        $datos = json_decode($respuesta);

        $cursos = $datos->data;

        return $cursos;
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

    public function obtenerUnCurso($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/cursos/{$id}");

        $datos = json_decode($respuesta);

        $curso = $datos->data;

        return $curso;
    }
}
