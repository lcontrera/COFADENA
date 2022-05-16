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
     	'idempresa',
     	'idproducto',
        'programado1',
        'anho1'
    ];
    	public $timestamps=false;

    	 public static function getprog_anual_ing(){
        $prog_anual_ing = Mprog_anual_ing::all();

        return $prog_anual_ing;
    }
         public static function getprog_anual_ings($empresa){
        $prog_anual_ings = Mprog_anual_ing::where('idempresa', $empresa)->get();

        return $prog_anual_ings;


     }


}
