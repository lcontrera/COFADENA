<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpresupuestogastado_ugc23m extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'presupuestogastado_ugc23m';
    protected $primaryKey = 'idtipoproducto';
    protected $fillable = [
        'grupo',
        'presupuesto_anual',
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
   public static function getpresupuestogastado_ugc23m(){
        $presupuestogastado_ugc23m = Mpresupuestogastado_ugc23m::all();

        return $presupuestogastado_ugc23m;
}
}