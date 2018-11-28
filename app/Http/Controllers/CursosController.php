<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

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
}
