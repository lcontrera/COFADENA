<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproyeccion_ingresos_fbm extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'proyeccion_ingresos_fbm';
    protected $primaryKey = 'idproyeccion_ingresos';
    protected $fillable = [
        'cantidad_ejecutadames',
        'porcentaje_mes',
        'acumulado_mes',
        'porcentaje_ejecucion_anual',
        'fecha1'
    ];

    public $timestamps=false;
    public static function getproyeccion_ingresos_fbm(){
        $proyeccion_ingresos_fbm = Mproyeccion_ingresos_fbm::all();

        return $proyeccion_ingresos_fbm;
    }
}
