<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mejecutado_prod_fbm extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'ejecutado_prod_fbm';
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
    public static function getejecutado_prod_fbm(){
        $ejecutado_prod_fbm = Mejecutado_prod_fbm::all();

        return $ejecutado_prod_fbm;
    }
}
