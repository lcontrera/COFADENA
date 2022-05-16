<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mejecucion_gastos extends Model
{
    use HasFactory;
       // ATRIBUTOS

    protected $table = 'ejecucion_gastos';
    protected $primaryKey = 'idejecuciongastos';
    protected $fillable = [
        'idempresa',
        'ejecucion_gastos',
        'ganancia_mensual',
        'fecha4',
        'ganacia_perdida',
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
        $ejecucion_gastoss = Mejecucion_gastos::where('idempresa', $empresa)->orderby('idempresa','desc')->get();

        return $ejecucion_gastoss;


     }


}
