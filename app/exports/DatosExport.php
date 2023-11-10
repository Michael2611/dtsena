<?php

namespace App\Exports;

use App\Models\Datos;
use App\Models\Dispositivo;
use Maatwebsite\Excel\Concerns\FromCollection;

class DatosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $dispositivoId;

    public function __construct($dispositivoId)
    {
        $this->dispositivoId = $dispositivoId;
    }

    public function collection()
    {
        return Dispositivo::findOrFail($this->dispositivoId)->datos;
    }
}
