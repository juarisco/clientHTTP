<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;
use ClienteHTTP\Http\Requests\unicoRequest;

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

    public function mostrarEstudiante()
    {
        return view('estudiantes.unico');
    }

    public function obtenerEstudiante(unicoRequest $request)
    {
        $id = $request->id;
        $estudiante = $this->obtenerUnEstudiante($id);

        return view('estudiantes.mostrar', ['estudiante' => $estudiante]);
    }

    public function obtenerUnEstudiante($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/estudiantes/{$id}");

        $datos = json_decode($respuesta);

        $estudiante = $datos->data;

        return $estudiante;
    }
}
