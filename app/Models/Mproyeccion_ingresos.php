<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mprog_anual_ing;
use App\Models\Mprog_mes_ing;
class Mproyeccion_ingresos extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'proyeccion_ingresos';
    protected $primaryKey = 'idproyeccion_ingresos';
    protected $fillable = [
        'idempresa',
        'idprog_mes_ing',
        'idprog_anual_ing',
        'cantidad_ejecutadames',
        'porcentaje_mes',
        'acumulado_mes',
        'porcentaje_ejecucion_anual',
        'fecha1'
    ];

    public $timestamps=false;
    public static function getproyeccion_ingresos(){
        $proyeccion_ingresos = Mproyeccion_ingresos::all();

        return $proyeccion_ingresos;
    }
     public static function getproyeccion_ingresoss($empresa){
        $proyeccion_ingresoss = Mproyeccion_ingresos::where('idempresa', $empresa)->get();

        return $proyeccion_ingresoss;


     }


}


