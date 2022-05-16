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
        $ejecutado_prods = DB::select('select p.producto, pmp.programado_mes,  ej.cantidad_ejecutada, ej.fecha1,
        sum(ej.cantidad_ejecutada)  OVER(PARTITION BY ej.idprog_mes_prod) as EJECUTADO_MES,
        (sum(ej.cantidad_ejecutada)  OVER(PARTITION BY ej.idprog_mes_prod))*100/pmp.programado_mes  as PORCENTAJE_MES,
        pap.programado,
        sum(ej.cantidad_ejecutada)  OVER(PARTITION BY ej.idprog_anual_prod) as EJECUTADO_ANHO,
        sum(ej.cantidad_ejecutada)  OVER(PARTITION BY ej.idprog_anual_prod)*100/pap.programado as porcentaje_anho
        from ejecutado_prod ej, productos p, prog_mes_prod pmp  , prog_anual_prod pap
        where ej.idproducto = p.idproducto
        and ej.idprog_mes_prod  = pmp.idprog_mes_prod
        and ej.idprog_anual_prod  = pap.idprog_anual_prod
        and ej.idempresa = ?', [$empresa] );



        return $ejecutado_prods;


     }

    //  public static function getejecutado_prods($empresa){
    //     $ejecutado_prods = Mejecutado_prod::where('idempresa', $empresa)->get();
    //     $ejecutado_prods = DB::table('ejecutado_prod as pr')
    //         ->join('empresas as e', 'pr.idempresa','=','e.idempresa')
    //         ->join('productos as p', 'pr.idproducto','=','p.idproducto')
    //         ->select(
    //             'pr.idproducto1',
    //             'p.idproducto',
    //             'p.producto',

    //             'pr.cantidad_ejecutada',
    //             'pr.cumplimiento_porcentaje',

    //             'pr.total_prod_mes',
    //             'pr.porcentaje_cumplimiento',
    //             'pr.porcentaje_uso_anual',
    //             'pr.fecha1'
    //         )
    //         ->where('e.idempresa', $empresa)
    //         ->get();
    //     //dd($ejecutado_prods);



    //     return $ejecutado_prods;


    //  }




}
