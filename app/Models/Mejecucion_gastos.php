<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Mejecucion_gastos extends Model
{
    use HasFactory;
       // ATRIBUTOS

    protected $table = 'ejecucion_gastos';
    protected $primaryKey = 'idejecuciongastos';
    protected $fillable = [
        'idempresa',
        'mes',
        'recursos_corrientes',
        'gastos_corrientes',
        'ganancia_mensual',
        'fecha4',
        'ganancia_perdida',
        'total_anual'

    ];

    public $timestamps=false;
     public static function getejecucion_gastos(){
        $ejecucion_gastos = Mejecucion_gastos::all();

        return $ejecucion_gastos;
    }
    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }
     public static function getejecucion_gastoss($empresa){
        $ejecucion_gastoss = Mejecucion_gastos::select(
            'idejecuciongastos',
            'idempresa',
            'mes',
            'recursos_corrientes',
            'gastos_corrientes',
            DB::raw("(recursos_corrientes - gastos_corrientes) AS ganancia "),
            DB::raw("(select SUM(recursos_corrientes) AS total_anual from ejecucion_gastos eg where date_part('year', ejecucion_gastos.fecha4) = date_part('year', eg.fecha4))"),
            DB::raw("date_part('month', fecha4) AS mess"),
            DB::raw("date_part('year', fecha4) AS anio"),'fecha4'
        )
        ->where('idempresa', $empresa)
        ->orderby('idempresa','desc')
        ->get();

        return $ejecucion_gastoss;


     }
   }


