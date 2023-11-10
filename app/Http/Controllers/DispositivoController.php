<?php

namespace App\Http\Controllers;

use App\Exports\DatosExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dispositivo;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class DispositivoController extends Controller
{
    public function dispositivos(){
        $dispositivos = Dispositivo::all();
        return view('dispositivo.index', compact('dispositivos'));
    }

    public function registroDispositivo(Request $request){
        $fecha = Carbon::now();

        $d_id_canal = $request->input('d_id_canal');
        $d_nombre = $request->input('d_nombre');

        $key_connect = Str::random(32);

        $dispositivos = DB::table('dispositivo')->where('d_key_connect', $key_connect)->get();

        while($dispositivos->count()>1){
            $key_connect = Str::random(32);
        }

        $dispositivo = new Dispositivo();
        $dispositivo->d_id_canal = $d_id_canal;
        $dispositivo->d_nombre = $d_nombre;
        $dispositivo->d_key_connect = $key_connect;
        $dispositivo->save();
        return back();
    }

    public function eliminarDispositivo($id){
        $dispositivo = Dispositivo::find($id);
        $dispositivo->delete();
        return back();
    }

    public function export($dispositivoId)
    {
        return Excel::download(new DatosExport($dispositivoId), 'datos.xlsx');
    }

}
