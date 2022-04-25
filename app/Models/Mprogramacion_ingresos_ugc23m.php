<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprogramacion_ingresos_ugc23m extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'programacion_ingresos_ugc23m';
    protected $primaryKey = 'idprogramacion_ingresos';
    protected $fillable = [
        //'idproducto',
        //'obs',
        'fecha3',
        'cantidad',
        'precio',
        'ingreso_mes',
        'total_anual',
        'porcentaje_ejecucion_anual'
    ];

    public $timestamps=false;
      public static function getprogramacion_ingresos_ugc23m(){
        $programacion_ingresos_ugc23m = Mprogramacion_ingresos_ugc23m::all();

        return $programacion_ingresos_ugc23m;
    }
}
