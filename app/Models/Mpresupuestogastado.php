<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpresupuestogastado extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'presupuestogastado';
    protected $primaryKey = 'idpresupuestogastado';
    protected $fillable = [
        'idempresa',
        'grupo',
        'presupuesto_anual',
        'ganancia_mensual',
        'fecha',
        'total_ejecutado',
        'porcentaje_ejecutado',
        'eficacia'
    ];

    public $timestamps=false;

    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER ARTICULOS
   public static function getpresupuestogastado(){
        $presupuestogastado = Mpresupuestogastado::all();

        return $presupuestogastado;
}
     public static function getpresupuestogastados($empresa){
        $presupuestogastados = Mpresupuestogastado::where('idempresa', $empresa)->get();

        return $presupuestogastados;


     }


}