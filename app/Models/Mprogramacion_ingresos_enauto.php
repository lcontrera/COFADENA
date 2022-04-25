<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprogramacion_ingresos_enauto extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'programacion_ingresos_enauto';
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
      public static function getprogramacion_ingresos_enauto(){
        $programacion_ingresos_enauto = Mprogramacion_ingresos_enauto::all();

        return $programacion_ingresos_enauto;
    }
}
