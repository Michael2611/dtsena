<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    use HasFactory;

    protected $table = "datos";

    protected $fillable = [
        'id',
        'da_id_dispositivo',
        'da_valor',
    ];

    public function dispositivo(){
        return $this->belongsTo(Dispositivo::class, 'da_id_dispositivo');
    }

}
