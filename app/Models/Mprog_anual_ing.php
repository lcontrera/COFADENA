<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprog_anual_ing extends Model
{
    use HasFactory;
         protected $table = 'prog_anual_ing';
     protected $primaryKey = 'idprog_anual_ing';
     protected $fillable = [
     	'idproducto',
        'programado1',
        'anho1'
    ];
    	public $timestamps=false;

    	 public static function getprog_anual_ing(){
        $prog_anual_ing = Mprog_anual_ing::all();

        return $prog_anual_ing;
    }


}
