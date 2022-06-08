<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mprog_anual_ing;
use App\Models\Mprog_mes_ing;
use DB;
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
        $proyeccion_ingresoss = DB::select("select proyeccion_ingresos.idproyeccion_ingresos,
productos.idproducto, productos.idempresa,
productos.producto,
proyeccion_ingresos.idprog_anual_ing,
proyeccion_ingresos.idprog_mes_ing,
proyeccion_ingresos.cantidad_ejecutadames,
SUM(proyeccion_ingresos.cantidad_ejecutadames) AS cantidading,
(select programado1 as programado_anualing from prog_anual_ing
where
prog_anual_ing.idprog_anual_ing = proyeccion_ingresos.idprog_anual_ing),
(select programado_mes1 as programado_mensualing from prog_mes_ing
where
prog_mes_ing.idprog_mes_ing = proyeccion_ingresos.idprog_mes_ing),
date_part('year', fecha1) AS anio_ing,
date_part('month', fecha1) AS mes_ing
from proyeccion_ingresos inner join productos on productos.idproducto = proyeccion_ingresos.idproducto and proyeccion_ingresos.idempresa = ?
group by proyeccion_ingresos.idproyeccion_ingresos,
productos.idproducto, productos.idempresa,
productos.producto, proyeccion_ingresos.idprog_anual_ing,
proyeccion_ingresos.idprog_mes_ing, proyeccion_ingresos.cantidad_ejecutadames, date_part('month', proyeccion_ingresos.fecha1), date_part('year', proyeccion_ingresos.fecha1)
order by productos.producto asc, mes_ing asc, anio_ing asc", [$empresa]);

        //return dd($proyeccion_ingresoss);
        return $proyeccion_ingresoss;


     }




}


