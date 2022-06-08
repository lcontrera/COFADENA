<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mproductos;
use DB;
class Mprog_mes_ing extends Model
{
    use HasFactory;
    protected $table = 'prog_mes_ing';
     protected $primaryKey = 'idprog_mes_ing';
     protected $fillable = [
     	'idempresa',
     	'idproducto',
        'programado_mes1',
        'mes1'
    ];
    	public $timestamps=false;

    	 public static function getprog_mes_ing(){
        $prog_mes_ing = Mprog_mes_ing::all();

        return $prog_mes_ing;
    }

         public static function getprog_mes_ings($empresa){
        $prog_mes_ings = Mprog_mes_ing::where('idempresa', $empresa)->get();

         $prog_mes_ings = DB::table('prog_mes_ing as pr')
        	->join('empresas as e', 'pr.idempresa','=','e.idempresa')
			->join('productos as p', 'pr.idproducto','=','p.idproducto')
			->select(
				'pr.idprog_mes_ing',
				'p.idproducto',
				'p.producto',
				'pr.programado_mes1',
				'pr.mes1'
			)
			->where('e.idempresa', $empresa)
			->get();

        return $prog_mes_ings;


     }
     public static function getprog_mensual_ingg($id){
        $prog_mensual_ingg = Mprog_mes_ing::find($id);

        return $prog_mensual_ingg;
    }
}
