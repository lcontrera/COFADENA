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

        'producto',
        'descripcion',
        'unidad'
    ];

    public $timestamps=false;

     public static function getproductos($empresa){
        $productos = Mproductos::where('idempresa', $empresa)->get();

        return $productos;


     }
     public static function getproducto($id){
        $producto = Mproductos::where('idempresa','=', '2');
        return $producto;
    }



}
