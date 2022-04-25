<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproductos_ugc23m extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'productos_ugc23m';
    protected $primaryKey = 'idproducto';
    protected $fillable = [
        'producto',
        'descripcion',
        'unidad'
    ];

    public $timestamps=false;

     public static function getproductos_ugc23m(){
        $productos_ugc23m = Mproductos_ugc23m::all();

        return $productos_ugc23m;
     }

}
