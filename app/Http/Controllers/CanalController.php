<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Canal;

class CanalController extends Controller
{

    public function canales(){
        $canales = Canal::all();
        return view('canal.index', compact('canales'));
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
}
