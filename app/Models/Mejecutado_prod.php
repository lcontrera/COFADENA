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

       /*$ejecutado_prods = DB::select('select p.idproducto, p.producto, pmp.programado_mes,  ej.cantidad_ejecutada, ej.fecha1,
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

        //DB::enableQueryLog();
*/
    //     $ejecutado_prods = Mejecutado_prod::join('productos', 'productos.idproducto', '=', 'ejecutado_prod.idproducto')
    //     //->join('empresas', 'empresas.idempresa', '=', 'ejecutado_prod.idempresa')
    //     ->select(
    //         'ejecutado_prod.idproducto1',
    //         'productos.idproducto',
    //         'productos.idempresa',
    //         'productos.producto',
    //         'ejecutado_prod.idprog_anual_prod',
    //         'ejecutado_prod.idprog_mes_prod',
    //         DB::raw('SUM(ejecutado_prod.cantidad_ejecutada) AS cantidad'),
    //         DB::raw("(select programado as programado_anual from prog_anual_prod where prog_anual_prod.idprog_anual_prod = ejecutado_prod.idprog_anual_prod)"),
    //         DB::raw("(select programado_mes as programado_mensual from prog_mes_prod where prog_mes_prod.idprog_mes_prod = ejecutado_prod.idprog_mes_prod)"),
    //         //DB::raw("(select programado as programado_anual from prog_anual_prod where prog_anual_prod.idproducto = productos.idproducto and prog_anual_prod.anho = date_part('year', fecha1) and prog_anual_prod.idempresa = " . $empresa . ")"),
    //         //DB::raw("(select programado_mes as programado_mensual from prog_mes_prod where prog_mes_prod.idproducto = productos.idproducto and CAST(CAST(split_part(prog_mes_prod.mes, '-', 2) as integer) as varchar) = CAST(date_part('month', ejecutado_prod.fecha1) AS varchar) and CAST(CAST(split_part(prog_mes_prod.mes, '-', 1) as integer) as varchar) = CAST(date_part('year', ejecutado_prod.fecha1) AS varchar) and prog_mes_prod.idempresa = " . $empresa . ")"),
    //         DB::raw("date_part('month', fecha1) AS mes"),
    //         DB::raw("date_part('year', fecha1) AS anio")
    //     )
    //     //->where('productos.producto','ilike',"%$empresa%")
    //     //->orWhere('productos.producto','ilike',"%$empresa%")
    //     //->orWhereBetween('fecha1', ['2001-01-01','2023-12-31'])
    //    // ->where('ejecutado_prod.edempresa','1')
    //     ->groupBy('ejecutado_prod.idproducto1')
    //     ->groupBy('productos.idproducto')
    //     ->groupBy('productos.idempresa')
    //     ->groupBy('productos.producto')
    //     ->groupBy('ejecutado_prod.idprog_anual_prod')
    //     ->groupBy('ejecutado_prod.idprog_mes_prod')
    //     ->groupBy(DB::raw("date_part('month', ejecutado_prod.fecha1)"))
    //     ->groupBy(DB::raw("date_part('year', ejecutado_prod.fecha1)"))
    //     ->orderBy('productos.producto')
    //     ->orderBy('mes')
    //     ->orderBy('anio')
    //     ->toSql();

        $ejecutado_prods=DB::select("select ejecutado_prod.idproducto1,
        productos.idproducto,
        productos.idempresa,
        productos.producto,
        ejecutado_prod.idprog_anual_prod,
        ejecutado_prod.idprog_mes_prod,
        SUM(ejecutado_prod.cantidad_ejecutada) AS cantidad,
        (select programado as programado_anual
        from prog_anual_prod
        where
        prog_anual_prod.idprog_anual_prod =
        ejecutado_prod.idprog_anual_prod),
        (select programado_mes as programado_mensual
        from prog_mes_prod
        where
        prog_mes_prod.idprog_mes_prod =
        ejecutado_prod.idprog_mes_prod ),
        date_part('month', fecha1) AS mes, date_part('year', fecha1) AS anio
        from ejecutado_prod inner join productos on
        productos.idproducto = ejecutado_prod.idproducto and ejecutado_prod.idempresa = ?
        group by ejecutado_prod.idproducto1, productos.idproducto, productos.idempresa, productos.producto, ejecutado_prod.idprog_anual_prod, ejecutado_prod.idprog_mes_prod, date_part('month', ejecutado_prod.fecha1), date_part('year', ejecutado_prod.fecha1) order by productos.producto asc, mes asc, anio asc", [$empresa]);
        //return dd(DB::getQueryLog());
      // return dd($ejecutado_prods);
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
