<?php

namespace App\Http\Controllers;

use App\Funcion;

use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function index() {
        $funciones = Funcion::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;
        return view("funciones.index", $argumentos);
    }

    public function create() {
        return view('funciones.create');
    }

    public function store(Request $request) {
        $nuevaFuncion = new Funcion();
        $nuevaFuncion->pelicula = $request->input('pelicula');
        $nuevaFuncion->fecha = $request->input('fecha');
        $nuevaFuncion->hora = $request->input('hora');
        
        if ($nuevaFuncion->save()){
            return redirect()->route('funciones.index')->with('exito','Funcion creada con exito');
        }
        return redirect()->route('funciones.index')->with('error', 'No se pudo crear funcion');
    }

    public function edit($id) {
        $funcion = Funcion::find($id);

        if ($funcion){
            $argumentos = array();
            $argumentos['funcion'] = $funcion;
            return view('funciones.edit', $argumentos);
        }
        return redirect()->route('funciones.index')->with('error', 'No existe la funcion');
    }

    public function update($id, Request $request) {
        $funcion = Funcion::Find($id);
        if ($funcion){
            $funcion->pelicula = $request->input('pelicula');
            $funcion->fecha = $request->input('fecha');
            $funcion->hora = $request->input('hora');

            if ($funcion->save()) {
                return redirect()->route('funciones.edit', $funcion->id)->with('exito', 'Se actualizo correctamente');
            }

            return edirect()->route('funciones.edit', $funcion->id)->with('error', 'No se pudo actualizar');
        }

        return redirect()->route('funciones.index')->with('error', 'No existe la funcion');
    }

    public function destroy($id) {
        $funcion = Funcion::find($id);
        if ($funcion) {
            //Si la encuentra, la borra
            if($funcion->delete()) {
                return redirect()->route('funciones.index')->with('exito', 'Funcion eliminada');
            }
            return redirect()->route('funciones.index')->with('error', 'No se encontro funcion a borrar');
        }
        return redirect()->route('funciones.index')->with('error', 'No se encontro funcion a borrar');
    }
}
