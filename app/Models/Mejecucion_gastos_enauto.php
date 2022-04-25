<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mejecucion_gastos_enauto extends Model
{
    use HasFactory;
       // ATRIBUTOS

    protected $table = 'ejecucion_gastos_enauto';
    protected $primaryKey = 'idejecuciongastos';
    protected $fillable = [
        'ejecucion_gastos',
        'fecha4',
        'ganacia_perdida',
        'total_anual'

    ];

    public $timestamps=false;
     public static function getejecucion_gastos_enauto(){
        $ejecucion_gastos_enauto = Mejecucion_gastos_enauto::all();

        return $ejecucion_gastos_enauto;
    }
    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }


}
