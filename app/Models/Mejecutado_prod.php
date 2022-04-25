<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mejecutado_prod extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'ejecutado_prod';
    protected $primaryKey = 'idproducto1';
    protected $fillable = [
        'cantidad_ejecutada',
        'cumplimiento_porcentaje',
        'total_prod_mes',
        'porcentaje_cumplimiento',
        'porcentaje_uso_anual',
        'fecha1'
    ];

    public $timestamps=false;
    public static function getejecutado_prod(){
        $ejecutado_prod = Mejecutado_prod::all();

        return $ejecutado_prod;
    }

     public static function getproduccion($id){
        $produccion = Mejecutado_prod::find($id);
        return $produccion;
    }

}
