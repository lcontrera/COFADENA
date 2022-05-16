<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprogramacion_ingresos extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'programacion_ingresos';
    protected $primaryKey = 'idprogramacion_ingresos';
    protected $fillable = [
        'idempresa',
        'idproducto',
        //'obs',
        'fecha3',
        'cantidad',
        'precio',
        'ingreso_mes',
        'total_anual',
        'porcentaje_ejecucion_anual'
    ];

    public $timestamps=false;
      public static function getprogramacion_ingresos(){
        $programacion_ingresos = Mprogramacion_ingresos::all();

        return $programacion_ingresos;
    }

         public static function getprogramacion_ingresoss($empresa){
        $programacion_ingresoss = Mprogramacion_ingresos::where('idempresa', $empresa)->get();

        return $programacion_ingresoss;


     }

}
