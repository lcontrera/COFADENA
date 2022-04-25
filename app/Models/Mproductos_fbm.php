<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproductos_fbm extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'productos_fbm';
    protected $primaryKey = 'idproducto';
    protected $fillable = [
        'producto',
        'descripcion',
        'unidad'
    ];

    public $timestamps=false;

     public static function getproductos_fbm(){
        $productos_fbm = Mproductos_fbm::all();

        return $productos_fbm;
     }

}
