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

    public function agregarEstudiante()
    {
        return view('estudiantes.agregar');
    }

    public function crearEstudiante(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $respuesta = $this->realizarPeticion('POST', 'https://apilumen.juandmegon.com/estudiantes', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);

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
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        // $id = $request->id;

        $respuesta = $this->realizarPeticion('PUT', "https://apilumen.juandmegon.com/estudiantes/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);

        return redirect()->route('estudiantes');

    }
}
