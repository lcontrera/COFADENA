<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minventario_productos_enauto extends Model
{
    use HasFactory;
       // ATRIBUTOS

    protected $table = 'inventario_productos_enauto';
    protected $primaryKey = 'idinvetarios';
    protected $fillable = [
        'detalle',
        'unidad1',
        'cantidad1',
        'costo_unitario',
        'costo_total87'
    ];

    public $timestamps=false;
     public static function getinventario_productos_enauto(){
        $inventario_productos_enauto = Minventario_productos_enauto::all();

        return $inventario_productos_enauto;
    }
    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER
}
