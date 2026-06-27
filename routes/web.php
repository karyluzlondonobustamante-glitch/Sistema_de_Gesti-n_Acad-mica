<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;

Route::get('/', [SistemaController::class, 'inicio']);
Route::get('/inicio', [SistemaController::class, 'inicio']);

// R. Estudiante
Route::get('/estudiantes', [SistemaController::class, 'estudiantes']);
Route::get('/estudiantes/crear', [SistemaController::class, 'crearEstudiante']);
Route::post('/estudiantes/guardar', [SistemaController::class, 'guardarEstudiante']);

Route::get('/estudiantes/editar/{id}', [SistemaController::class, 'editarEstudiante']);

Route::put('/estudiantes/actualizar/{id}', [SistemaController::class, 'actualizarEstudiante']);
Route::post('/estudiantes/eliminar', [SistemaController::class, 'eliminarEstudiante']);

// R. Profesor
Route::get('/profesores', [SistemaController::class, 'profesores']);
Route::get('/profesores/crear', [SistemaController::class, 'crearProfesor']);
Route::post('/profesores/guardar', [SistemaController::class, 'guardarProfesor']);

Route::get('/profesores/editar/{id}', [SistemaController::class, 'editarProfesor']);

Route::put('/profesores/actualizar/{id}', [SistemaController::class, 'actualizarProfesor']);

Route::get('/profesores/eliminar/{id}', [SistemaController::class, 'eliminarProfesor']);

// R. Materias
Route::get('/materias', [SistemaController::class, 'materias']);
Route::get('/materias/crear', [SistemaController::class, 'crearMateria']);
Route::post('/materias/guardar', [SistemaController::class, 'guardarMateria']);

Route::get('/materias/editar/{id}', [SistemaController::class, 'editarMateria']);

Route::put('/materias/actualizar/{id}', [SistemaController::class, 'actualizarMateria']);

Route::get('/materias/eliminar/{id}', [SistemaController::class, 'eliminarMateria']);
