<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Materia;
use Illuminate\Support\Facades\Log;

class SistemaController extends Controller
{
    // RUTA INICIO
    public function inicio() {
        return view('inicio');
    }

    // === CRUD ESTUDIANTES ===
    public function estudiantes() {
        $estudiantes = Estudiante::all();
        return view('estudiantes', compact('estudiantes'));
    }
    public function crearEstudiante() {
        return view('crear_estudiante');
    }
    public function guardarEstudiante(Request $request) {
        $e = new Estudiante();
        $e->nombre = $request->nombre;
        $e->apellido = $request->apellido;
        $e->correo = $request->correo;
        $e->programa = $request->programa;
        $e->save();
        return redirect('/estudiantes');
    }
    public function editarEstudiante($id) {
        $estudiante = Estudiante::find($id);
        return view('editar_estudiante', compact('estudiante'));
    }
    public function actualizarEstudiante(Request $request, $id) {
        $e = Estudiante::find($id);
        $e->nombre = $request->nombre;
        $e->apellido = $request->apellido;
        $e->correo = $request->correo;
        $e->programa = $request->programa;
        Log::info('Actualizando estudiante con ID: ' . $id, ['nombre' => $e->nombre, 'apellido' => $e->apellido, 'correo' => $e->correo, 'programa' => $e->programa]);
        $e->save();
        return redirect('/estudiantes');
    }
    public function eliminarEstudiante(Request $request) {
        Estudiante::find($request->id)->delete();
        Log::info('Estudiante con ID ' . $request->id . ' eliminado correctamente.');
        return redirect('/estudiantes');
    }

    // === CRUD PROFESORES ===
    public function profesores() {
        Log::info('Accediendo a la lista de profesores');
        $profesores = Profesor::all();
        Log::info('Accediendo a la lista de profesores', ['profesores' => $profesores]);

        return view('profesores', compact('profesores'));
    }
    public function crearProfesor() {
        return view('crear_profesor');
    }
    public function guardarProfesor(Request $request) {
        $p = new Profesor();
        $p->nombre = $request->nombre;
        $p->apellido = $request->apellido;
        $p->correo = $request->correo;
        $p->save();
        return redirect('/profesores');
    }
    public function editarProfesor($id) {
        Log::info('Accediendo a la edición del profesor con ID: ' . $id);
        $profesor = Profesor::find($id);
        return view('editar_profesor', compact('profesor'));
    }
    public function actualizarProfesor(Request $request, $id) {
        $p = Profesor::find($id);
        $p->nombre = $request->nombre;
        $p->apellido = $request->apellido;
        $p->correo = $request->correo;
        $p->save();
        return redirect('/profesores');
    }
    public function eliminarProfesor($id) {
        Profesor::find($id)->delete();
        Log::info('Profesor con ID ' . $id . ' eliminado correctamente.');
        return redirect('/profesores');
    }

    // === CRUD MATERIAS ===
    public function materias() {
        $materias = Materia::all();
        return view('materias', compact('materias'));
    }
    public function crearMateria() {
        return view('crear_materias');
    }
    public function guardarMateria(Request $request) {
        $m = new Materia();
        $m->nombre = $request->nombre_materia;
        $m->creditos = $request->creditos;
        $m->save();
        return redirect('/materias');
    }
    public function editarMateria($id) {
        $materia = Materia::find($id);
        return view('editar_materia', compact('materia'));
    }
    public function actualizarMateria(Request $request, $id) {
        $m = Materia::find($id);
        // CORREGIDO: Se cambió $request->nombre por $request->nombre_materia
        $m->nombre = $request->nombre_materia;
        $m->creditos = $request->creditos;
        $m->save();
        return redirect('/materias');
    }
    public function eliminarMateria($id) {
        Materia::find($id)->delete();
        return redirect('/materias');
    }
}

