<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minventario_productos_ugc23m extends Model
{
    use HasFactory;
       // ATRIBUTOS

    protected $table = 'inventario_productos_ugc23m';
    protected $primaryKey = 'idinvetarios';
    protected $fillable = [
        'detalle',
        'unidad1',
        'cantidad1',
        'costo_unitario',
        'costo_total87'
    ];

    public $timestamps=false;
     public static function getinventario_productos_ugc23m(){
        $inventario_productos_ugc23m = Minventario_productos_ugc23m::all();

        return $inventario_productos_ugc23m;
    }
    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER
}
