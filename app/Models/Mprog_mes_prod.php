<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Mprog_mes_prod extends Model
{
    use HasFactory;
    protected $table = 'prog_mes_prod';
     protected $primaryKey = 'idprog_mes_prod';
     protected $fillable = [
     	'idempresa',
     	'idproducto',
        'programado_mes',
        'mes'
    ];
    	public $timestamps=false;

    	 public static function getprog_mes_prod(){
        $prog_mes_prod = Mprog_mes_prod::all();

        return $prog_mes_prod;
    }

    public static function getprog_mes_prods($empresa){
        $prog_mes_prods = Mprog_mes_prod::where('idempresa', $empresa)->get();

              $prog_mes_prods = DB::table('prog_mes_prod as pr')
        	->join('empresas as e', 'pr.idempresa','=','e.idempresa')
			->join('productos as p', 'pr.idproducto','=','p.idproducto')
			->select(
				'pr.idprog_mes_prod',
				'p.idproducto',
				'p.producto',
				'pr.programado_mes',
				'pr.mes'
			)
			->where('e.idempresa', $empresa)
			->get();

        return $prog_mes_prods;


     }
     public static function getprog_mensual_prodd($id){
        $prog_mensual_prodd = Mprog_mes_prod::find($id);

        return $prog_mensual_prodd;
    }

}
