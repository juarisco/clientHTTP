<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('principal');
});

// Route::get('/prueba', 'Controller@obtenerAccessToken');

Route::get('/estudiantes', 'EstudiantesController@mostrarEstudiantes')->name('estudiantes');

Route::get('/estudiantes/unico', 'EstudiantesController@mostrarEstudiante')->name('estudiante');
Route::post('/estudiantes/unico', 'EstudiantesController@obtenerEstudiante')->name('estudiante');

Route::get('/estudiantes/agregar', 'EstudiantesController@agregarEstudiante')->name('agregarEstudiante');
Route::post('/estudiantes/agregar', 'EstudiantesController@crearEstudiante')->name('agregarEstudiante');

Route::get('/estudiantes/actualizar', 'EstudiantesController@elegirEstudiante')->name('elegirEstudiante');
Route::post('/estudiantes/actualizar', 'EstudiantesController@editarEstudiante')->name('editarEstudiante');
Route::put('/estudiantes/actualizar/{id}', 'EstudiantesController@actualizarEstudiante')->name('actualizarEstudiante');

Route::get('/estudiantes/eliminar', 'EstudiantesController@seleccionarEstudiante')->name('seleccionarEstudiante');
Route::post('/estudiantes/eliminar', 'EstudiantesController@eliminarEstudiante')->name('eliminarEstudiante');

Route::get('/profesores', 'ProfesoresController@mostrarProfesores')->name('profesores');

Route::get('/profesores/unico', 'ProfesoresController@mostrarProfesor')->name('profesor');
Route::post('/profesores/unico', 'ProfesoresController@obtenerProfesor')->name('profesor');

Route::get('/profesores/agregar', 'ProfesoresController@agregarProfesor')->name('agregarProfesor');
Route::post('/profesores/agregar', 'ProfesoresController@crearProfesor')->name('agregarProfesor');

Route::get('/profesores/actualizar', 'ProfesoresController@elegirProfesor')->name('elegirProfesor');
Route::post('/profesores/actualizar', 'ProfesoresController@editarProfesor')->name('editarProfesor');
Route::put('/profesores/actualizar/{id}', 'ProfesoresController@actualizarProfesor')->name('actualizarProfesor');


Route::get('/profesores/eliminar', 'ProfesoresController@seleccionarProfesor')->name('seleccionarProfesor');
Route::post('/profesores/eliminar', 'ProfesoresController@eliminarProfesor')->name('eliminarProfesor');


Route::get('/cursos', 'CursosController@mostrarCursos')->name('cursos');
Route::get('/cursos/unico', 'CursosController@mostrarCurso')->name('curso');
Route::post('/cursos/unico', 'CursosController@obtenercurso')->name('curso');

Route::get('/cursos/estudiantes', 'CursoEstudiantesController@mostrarCursos')->name('mostrarCursos');
Route::post('/cursos/estudiantes', 'CursoEstudiantesController@mostrarEstudiantesCurso')->name('mostrarEstudiantesCurso');

Route::get('/cursos/estudiantes/agregar', 'CursoEstudiantesController@mostrarEstudiantesCursos')->name('mostrarEstudiantesCursos');
Route::post('/cursos/estudiantes/agregar', 'CursoEstudiantesController@agregarEstudianteCurso')->name('agregarEstudianteCurso');

Route::get('/profesores/cursos', 'ProfesorCursosController@mostrarProfesores')->name('mostrarProfesores');
Route::post('/profesores/cursos', 'ProfesorCursosController@mostrarCursosProfesor')->name('mostrarCursosProfesor');

Route::get('/profesores/cursos/agregar', 'ProfesorCursosController@agregarCurso')->name('agregarCurso');
Route::post('/profesores/cursos/agregar', 'ProfesorCursosController@crearCurso')->name('crearCurso');

Route::get('/profesores/cursos/actualizar', 'ProfesorCursosController@elegirCurso')->name('elegirCurso');
Route::post('/profesores/cursos/actualizar', 'ProfesorCursosController@editarCurso')->name('editarCurso');
// Route::put('/profesores/cursos/actualizar', 'ProfesorCursosController@actualizarCurso')->name('actualizarCurso');
Route::put('/profesores/cursos/{id}/actualizar', 'ProfesorCursosController@actualizarCurso')->name('actualizarCurso');

Route::get('/profesores/cursos/eliminar', 'ProfesorCursosController@seleccionarCurso')->name('seleccionarCurso');
Route::post('/profesores/cursos/eliminar', 'ProfesorCursosController@eliminarCurso')->name('eliminarCurso');

Route::get('/cursos/estudiantes/eliminar', 'CursoEstudiantesController@seleccionarCurso')->name('seleccionarCurso');
Route::post('/cursos/estudiantes/eliminar', 'CursoEstudiantesController@seleccionarEstudianteCurso')->name('seleccionarEstudianteCurso');
Route::delete('/cursos/estudiantes/eliminar', 'CursoEstudiantesController@eliminarEstudianteCurso')->name('eliminarEstudianteCurso');
