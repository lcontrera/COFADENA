<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproyeccion_ingresos_ugc23m extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'proyeccion_ingresos_ugc23m';
    protected $primaryKey = 'idproyeccion_ingresos';
    protected $fillable = [
        'cantidad_ejecutadames',
        'porcentaje_mes',
        'acumulado_mes',
        'porcentaje_ejecucion_anual',
        'fecha1'
    ];

    public $timestamps=false;
    public static function getproyeccion_ingresos_ugc23m(){
        $proyeccion_ingresos_ugc23m = Mproyeccion_ingresos_ugc23m::all();

        return $proyeccion_ingresos_ugc23m;
    }
}
