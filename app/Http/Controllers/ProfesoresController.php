<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function mostrarProfesores()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesores.todos', ['profesores' => $profesores]);
    }

    public function obtenerTodosLosProfesores()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/profesores');

        $datos = json_decode($respuesta);

        $profesores = $datos->data;

        return $profesores;
    }
}
