<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function mostrarEstudiantes()
    {
        $estudiantes = $this->obtenerTodosLosEstudiantes();

        return view('estudiantes.todos', ['estudiantes' => $estudiantes]);
    }

    public function obtenerTodosLosEstudiantes()
    {
        $respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/estudiantes');

        $datos = json_decode($respuesta);

        $estudiantes = $datos->data;

        return $estudiantes;
    }
}
