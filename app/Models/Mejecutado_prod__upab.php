<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mejecutado_prod__upab extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'ejecutado_prod_upab';
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
    public static function getejecutado_prod_upab(){
        $ejecutado_prod_upab = Mejecutado_prod__upab::all();

        return $ejecutado_prod_upab;
    }
}
