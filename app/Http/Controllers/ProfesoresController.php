<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;
use ClienteHTTP\Http\Requests\unicoRequest;

class ProfesoresController extends ClienteController
{
    public function mostrarProfesores()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesores.todos', ['profesores' => $profesores]);
    }

    public function mostrarProfesor()
    {
        return view('profesores.unico');
    }

    public function obtenerProfesor(unicoRequest $request)
    {
        $id = $request->id;
        $profesor = $this->obtenerUnProfesor($id);

        return view('profesores.mostrar', ['profesor' => $profesor]);
    }

    public function agregarProfesor()
    {
        return view('profesores.agregar');
    }

    public function crearProfesor(Request $request)
    {
        $this->almacenarProfesor($request);

        return redirect()->route('profesores');
    }

    public function elegirProfesor()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesores.elegir', ['profesores' => $profesores]);
    }

    public function editarProfesor(Request $request)
    {
        $id = $request->profesor_id;

        $profesor = $this->obtenerUnProfesor($id);

        return view('profesores.editar', ['profesor' => $profesor]);
    }

    public function actualizarProfesor(Request $request, $id)
    {
        $this->modificarProfesor($request, $id);

        return redirect()->route('profesores');

    }

    public function seleccionarProfesor()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesores.seleccionar', ['profesores' => $profesores]);
    }

    public function eliminarProfesor(Request $request)
    {
        $this->removerProfesor($request);

        return redirect()->route('profesores');

    }
}
