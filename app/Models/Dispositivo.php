<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $table = "dispositivo";

    protected $fillable = [
        'id',
        'd_id_canal',
        'd_nombre',
    ];

    public function datos(){
        return $this->hasMany(Datos::class, 'da_id_dispositivo');
    }

}
