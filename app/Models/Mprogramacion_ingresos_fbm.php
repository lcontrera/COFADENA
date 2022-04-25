<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprogramacion_ingresos_fbm extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'programacion_ingresos_fbm';
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
      public static function getprogramacion_ingresos_fbm(){
        $programacion_ingresos_fbm = Mprogramacion_ingresos_fbm::all();

        return $programacion_ingresos_fbm;
    }
}
