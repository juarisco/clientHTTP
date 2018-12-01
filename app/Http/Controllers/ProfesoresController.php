<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;
use ClienteHTTP\Http\Requests\unicoRequest;

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

    public function obtenerUnProfesor($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/profesores/{$id}");

        $datos = json_decode($respuesta);

        $profesor = $datos->data;

        return $profesor;
    }

    public function agregarProfesor()
    {
        return view('profesores.agregar');
    }

    public function crearProfesor(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $respuesta = $this->realizarPeticion('POST', 'https://apilumen.juandmegon.com/profesores', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);

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
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        // $id = $request->id;

        $respuesta = $this->realizarPeticion('PUT', "https://apilumen.juandmegon.com/profesores/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);

        return redirect()->route('profesores');

    }

    public function seleccionarProfesor()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesores.seleccionar', ['profesores' => $profesores]);
    }

    public function eliminarProfesor(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $id = $request->profesor_id;

        $respuesta = $this->realizarPeticion('DELETE', "https://apilumen.juandmegon.com/profesores/{$id}", ['headers' => ['Authorization' => $accessToken]]);

        return redirect()->route('profesores');

    }
}
