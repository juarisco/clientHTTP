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


Route::get('/profesores', 'ProfesoresController@mostrarProfesores')->name('profesores');

Route::get('/profesores/unico', 'ProfesoresController@mostrarProfesor')->name('profesor');
Route::post('/profesores/unico', 'ProfesoresController@obtenerProfesor')->name('profesor');

Route::get('/profesores/agregar', 'ProfesoresController@agregarProfesor')->name('agregarProfesor');
Route::post('/profesores/agregar', 'ProfesoresController@crearProfesor')->name('agregarProfesor');


Route::get('/cursos', 'CursosController@mostrarCursos')->name('cursos');
Route::get('/cursos/unico', 'CursosController@mostrarCurso')->name('curso');
Route::post('/cursos/unico', 'CursosController@obtenercurso')->name('curso');