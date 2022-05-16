<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mprog_anual_prod;

class Mproductos extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'productos';
    protected $primaryKey = 'idproducto';
    protected $fillable = [
        'idempresa',
        'producto',
        'descripcion',
        'unidad'
    ];

    public $timestamps=false;

    public static function getproducto(){
        $producto = Mproductos::all();

        return $producto;
    }
     public static function getproductos($empresa){
        $productos = Mproductos::join('empresas', 'empresas.idempresa', '=', 'productos.idempresa')
        ->where('empresas.idempresa', $empresa)
        ->orderby('empresas.idempresa','desc')
        ->get();

        return $productos;


     }
         public static function getproducto1($id){
                $producto1 = Mproductos::find($id);

                return $producto1;
            }
             public static function getproductos1($id){
        $productos1 = Mproductos::find($id);

        return $productos1;
    }

}
