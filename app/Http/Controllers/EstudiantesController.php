<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;
use ClienteHTTP\Http\Requests\unicoRequest;

class EstudiantesController extends ClienteController
{
    public function mostrarEstudiantes()
    {
        $estudiantes = $this->obtenerTodosLosEstudiantes();

        return view('estudiantes.todos', ['estudiantes' => $estudiantes]);
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

    public function agregarEstudiante()
    {
        return view('estudiantes.agregar');
    }

    public function crearEstudiante(Request $request)
    {
        $this->almacenarEstudiante($request);

        return redirect()->route('estudiantes');
    }

    public function elegirEstudiante()
    {
        $estudiantes = $this->obtenerTodosLosEstudiantes();

        return view('estudiantes.elegir', ['estudiantes' => $estudiantes]);
    }

    public function editarEstudiante(Request $request)
    {
        $id = $request->estudiante_id;

        $estudiante = $this->obtenerUnEstudiante($id);

        return view('estudiantes.editar', ['estudiante' => $estudiante]);
    }

    public function actualizarEstudiante(Request $request, $id)
    {
        $this->modificarEstudiante($request, $id);

        return redirect()->route('estudiantes');

    }

    public function seleccionarEstudiante()
    {
        $estudiantes = $this->obtenerTodosLosEstudiantes();

        return view('estudiantes.seleccionar', ['estudiantes' => $estudiantes]);
    }

    public function eliminarEstudiante(Request $request)
    {
        $this->removerEstudiante($request);

        return redirect()->route('estudiantes');

    }
}
