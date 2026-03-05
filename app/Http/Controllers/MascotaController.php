<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index() {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function guardar(Request $request) {
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->edad = $request->edad;
        $mascota->tipo = $request->tipo;
        $mascota->persona_id = $request->persona_id;
        $mascota->save();
        return redirect()->back();
    }

    public function eliminar($id) {
        Mascota::find($id)->delete();
        return redirect()->back();
    }

    public function editar($id) {
        $mascota = Mascota::find($id);
        return view('mascotas.edit', compact('mascota'));
    }

    public function actualizar(Request $request, $id) {
        $mascota = Mascota::find($id);
        $mascota->nombre = $request->nombre;
        $mascota->edad = $request->edad;
        $mascota->tipo = $request->tipo;
        $mascota->persona_id = $request->persona_id;
        $mascota->save();
        return redirect()->route('mascotas.index');
    }
}