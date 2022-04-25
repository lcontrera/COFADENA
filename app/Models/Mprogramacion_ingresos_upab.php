<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprogramacion_ingresos_upab extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'programacion_ingresos_upab';
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
      public static function getprogramacion_ingresos_upab(){
        $programacion_ingresos_upab = Mprogramacion_ingresos_upab::all();

        return $programacion_ingresos_upab;
    }
}
