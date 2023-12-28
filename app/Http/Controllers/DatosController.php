<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Datos;
use Illuminate\Http\Request;

class DatosController extends Controller
{

    public function store(Request $request){

        $temperatura = $_GET['temperature'];

        $json_data = $_GET['data'];

        $data = json_decode($json_data, true);

        foreach ($data as $sensor_name => $sensor_value) {
            $datos  =  new Datos();
            $datos->da_id_dispositivo = $sensor_name;
            $datos->da_valor = $sensor_value;

            $datos->save();
        }
    }

}
