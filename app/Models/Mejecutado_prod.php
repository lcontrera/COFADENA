<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Mejecutado_prod extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'ejecutado_prod';
    protected $primaryKey = 'idproducto1';
    protected $fillable = [
        'idempresa',
        'idproducto',
        'idprog_mes_prod',
        'idprog_anual_prod',
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
     public static function getejecutado_prods($empresa){
        $ejecutado_prods = Mejecutado_prod::where('idempresa', $empresa)->get();
        $ejecutado_prods = DB::table('ejecutado_prod as pr')
            ->join('empresas as e', 'pr.idempresa','=','e.idempresa')
            ->join('productos as p', 'pr.idproducto','=','p.idproducto')
            ->select(
                'pr.idproducto1',
                'p.idproducto',
                'p.producto',
                'pr.cantidad_ejecutada',
                'pr.cumplimiento_porcentaje',
                'pr.total_prod_mes',
                'pr.porcentaje_cumplimiento',
                'pr.porcentaje_uso_anual',
                'pr.fecha1'
            )
            ->where('e.idempresa', $empresa)
            ->get();
        //dd($ejecutado_prods);

        return $ejecutado_prods;


     }

}
