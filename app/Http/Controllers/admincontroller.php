<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class admincontroller extends Controller
{
    public function inicio(){
        $personas = persona::all();
        return view('welcome', compact('personas'));
    }

    public function guardar(Request $request){
        $persona = new persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->direccion = $request->direccion;
        $persona->edad = $request->edad;
        $persona->save();
        return redirect()->back();
    }

    public function eliminar($id){
        $persona = persona::find($id);
        $persona->delete();
        return redirect()->back();
    }
}
