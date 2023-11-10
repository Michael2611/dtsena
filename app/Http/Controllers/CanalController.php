<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Canal;
use App\Models\Dispositivo;

class CanalController extends Controller
{

    public function canales(){
        $canales = Canal::all();
        return view('canal.index', compact('canales'));
    }

    public function canalInfo($id){
        $canal = Canal::find($id);
        $dispositivos = Dispositivo::where('d_id_canal',$id)->take(5)->get();
        return view('dispositivo.index', compact('canal','dispositivos'));
    }

    public function registroCanal(Request $request){
        $c_nombre = $request->input('c_nombre');
        $c_estado_vista = $request->input('c_estado_vista');
        $canal = new Canal();
        $canal->id_user_create = 1;
        $canal->c_nombre = $c_nombre;
        $canal->c_estado_vista = $c_estado_vista;
        $canal->save();
        return back();
    }

    public function editarCanal($id){
        $canal = Canal::find($id);
        return view('canal.editar', compact('canal'));
    }

    public function actualizarCanal(Request $request, $id){
        $c_nombre = $request->input('c_nombre');
        $c_estado_vista = $request->input('c_estado_vista');
        $canal = Canal::find($id);
        $canal->id_user_create = 1;
        $canal->c_nombre = $c_nombre;
        $canal->c_estado_vista = $c_estado_vista;
        $canal->save();
        return back();
    }

    public function eliminarCanal($id){
        $canal = Canal::find($id);
        $canal->delete();
        return back();
    }

}
