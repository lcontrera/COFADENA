<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproyeccion_ingresos_enauto extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'proyeccion_ingresos_enauto';
    protected $primaryKey = 'idproyeccion_ingresos';
    protected $fillable = [
        'cantidad_ejecutadames',
        'porcentaje_mes',
        'acumulado_mes',
        'porcentaje_ejecucion_anual',
        'fecha1'
    ];

    public $timestamps=false;
    public static function getproyeccion_ingresos_enauto(){
        $proyeccion_ingresos_enauto = Mproyeccion_ingresos_enauto::all();

        return $proyeccion_ingresos_enauto;
    }
}
