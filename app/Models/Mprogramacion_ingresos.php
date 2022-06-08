<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Mprogramacion_ingresos extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'programacion_ingresos';
    protected $primaryKey = 'idprogramacion_ingresos';
    protected $fillable = [
        'idempresa',
        'idproducto',
        'idprog_anual_ing',
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
        //$programacion_ingresoss = Mprogramacion_ingresos::where('idempresa', $empresa)->get();

        /*$programacion_ingresoss = Mprogramacion_ingresos::join('productos', 'productos.idproducto', '=', 'programacion_ingresos.idproducto')
        ->select(
            'programacion_ingresos.idprogramacion_ingresos',
            'productos.idproducto',
            'productos.idempresa',
            'productos.producto',
            'programacion_ingresos.idprog_anual_ing',

            DB::raw('SUM(programacion_ingresos.cantidad) AS cantidadpi'),
            DB::raw('SUM(programacion_ingresos.precio) AS preciopi'),
            DB::raw("(select programado1 AS programadoing from prog_anual_ing where prog_anual_ing.idprog_anual_ing = programacion_ingresos.idprog_anual_ing)"),
            DB::raw("(select cantidad * precio AS multi)"),
            DB::raw("date_part('year', fecha3) AS anio_prog"),
            DB::raw("date_part('month', fecha3) AS mes_prog")
        )
        ->groupBy('programacion_ingresos.idprogramacion_ingresos')
        ->groupBy('productos.idproducto')
        ->groupBy('productos.idempresa')
        ->groupBy('productos.producto')
        ->groupBy('programacion_ingresos.idprog_anual_ing')
        ->groupBy('programacion_ingresos.cantidad')
        ->groupBy('programacion_ingresos.precio')
        ->groupBy(DB::raw("date_part('month', programacion_ingresos.fecha3)"))
        ->groupBy(DB::raw("date_part('year', programacion_ingresos.fecha3)"))
        ->orderBy('productos.producto')
        ->orderBy('mes_prog')
        ->orderBy('anio_prog')
        ->toSql();*/
       // return dd($programacion_ingresoss);

        $programacion_ingresoss=DB::select("select programacion_ingresos.idprogramacion_ingresos,
            productos.idproducto,
             productos.idempresa,
            productos.producto,
            programacion_ingresos.idprog_anual_ing,
            SUM(programacion_ingresos.cantidad) AS cantidadpi,
            SUM(programacion_ingresos.precio) AS preciopi,
            (select programado1 AS programado_anualing from prog_anual_ing
             where
            prog_anual_ing.idprog_anual_ing = programacion_ingresos.idprog_anual_ing),
        (select cantidad * precio AS multi),
         date_part('year', fecha3) AS anio_prog, date_part('month', fecha3) AS mes_prog
         from programacion_ingresos inner join productos on productos.idproducto = programacion_ingresos.idproducto and programacion_ingresos.idempresa = ?
        group by programacion_ingresos.idprogramacion_ingresos, productos.idproducto, productos.idempresa, productos.producto, programacion_ingresos.idprog_anual_ing, programacion_ingresos.cantidad, programacion_ingresos.precio, date_part('month', programacion_ingresos.fecha3), date_part('year', programacion_ingresos.fecha3) order by productos.producto asc,
            mes_prog asc, anio_prog asc", [$empresa]);
        return $programacion_ingresoss;


     }

}
