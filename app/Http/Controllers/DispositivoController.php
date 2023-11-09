<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    public function dispositivos(){
        $dispositivos = Dispositivos::all();
        return view('dispositivo.index', compact('dispositivos'));
    }
}
