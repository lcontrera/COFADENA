<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproductos_upab extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'productos_upab';
    protected $primaryKey = 'idproducto';
    protected $fillable = [
        'producto',
        'descripcion',
        'unidad'
    ];

    public $timestamps=false;

     public static function getproductos_upab(){
        $productos_upab = Mproductos_upab::all();

        return $productos_upab;
     }

}
