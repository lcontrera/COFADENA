<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mproductos_enauto extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'productos_enauto';
    protected $primaryKey = 'idproducto';
    protected $fillable = [
        'producto',
        'descripcion',
        'unidad'
    ];

    public $timestamps=false;

     public static function getproductos_enauto(){
        $productos_enauto = Mproductos_enauto::all();

        return $productos_enauto;
     }

}
