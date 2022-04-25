<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpresupuestogastado_enauto extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'presupuestogastado_enauto';
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
   public static function getpresupuestogastado_enauto(){
        $presupuestogastado_enauto = Mpresupuestogastado_enauto::all();

        return $presupuestogastado_enauto;
}
}