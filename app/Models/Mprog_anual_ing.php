<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
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
        $prog_anual_ings = DB::table('prog_anual_ing as pr')
        	->join('empresas as e', 'pr.idempresa','=','e.idempresa')
			->join('productos as p', 'pr.idproducto','=','p.idproducto')
			->select(
				'pr.idprog_anual_ing',
				'p.idproducto',
				'p.producto',
				'pr.programado1',
				'pr.anho1'
			)
			->where('e.idempresa', $empresa)
			->get();
        return $prog_anual_ings;


     }
     public static function getprog_anual_ingg($id){
        $prog_anual_ingg = Mprog_anual_ing::find($id);

        return $prog_anual_ingg;
    }

}
