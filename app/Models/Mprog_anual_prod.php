<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Apps\Models\Mproductos;

class Mprog_anual_prod extends Model
{
    use HasFactory;
     protected $table = 'prog_anual_prod';
     protected $primaryKey = 'idprog_anual_prod';
     protected $fillable = [
     	'idproducto',
        'programado',
        'anho'
    ];
    	public $timestamps=false;

    	 public static function getprog_anual_prod(){
        $prog_anual_prod = Mprog_anual_prod::all();

        return $prog_anual_prod;
    }


}
