<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minventario_productos extends Model
{
    use HasFactory;
       // ATRIBUTOS

    protected $table = 'inventario_productos';
    protected $primaryKey = 'idinvetarios';
    protected $fillable = [
        'idempresa',
        'detalle',
        'unidad1',
        'cantidad1',
        'costo_unitario',
        'costo_total87',
        'fecha5'
    ];

    public $timestamps=false;
     public static function getinventario_productos(){
        $inventario_productos = Minventario_productos::all();

        return $inventario_productos;
    }
    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER
     public static function getinventario_productoss($empresa){
        $inventario_productoss = Minventario_productos::where('idempresa', $empresa)->orderby('idempresa','desc')->get();

        return $inventario_productoss;


     }

}

