<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Apps\Models\Mproductos;
use DB;

class Mprog_anual_prod extends Model
{
    use HasFactory;
     protected $table = 'prog_anual_prod';
     protected $primaryKey = 'idprog_anual_prod';
     protected $fillable = [
     	'idempresa',
     	'idproducto',
        'programado',
        'anho'
    ];
    	public $timestamps=false;

    	 public static function getprog_anual_prod(){
        $prog_anual_prod = Mprog_anual_prod::all();

        return $prog_anual_prod;
    }
    public static function getprog_anual_prods($empresa){
    	$prog_anual_prods = Mprog_anual_prod::where('idempresa', $empresa)->get();

        /*$prog_anual_prods = DB::table('prog_anual_prod as a')
			->join('productos as c','c.idproducto','=','a.idproducto')
			->select('a.idprog_anual_prod as idprog_anual_prod','a.programado','a.anho as anho','c.producto as idproducto')
			->where('e.idempresa', $empresa)
			->orderby('a.idArticulo','desc')
            ->get();*/

        $prog_anual_prods = DB::table('prog_anual_prod as pr')
        	->join('empresas as e', 'pr.idempresa','=','e.idempresa')
			->join('productos as p', 'pr.idproducto','=','p.idproducto')
			->select(
				'pr.idprog_anual_prod',
				'p.idproducto',
				'p.producto',
				'pr.programado',
				'pr.anho'
			)
			->where('e.idempresa', $empresa)
			->get();
/*
$articulos=DB::table('articulo as a')
                    ->join('categoria as c','c.idCategoria','=','a.idCategoria')
                    ->select('a.idArticulo as idArticulo','a.codigo as codigo','a.foto as foto','a.nombre as nombre','c.nombre as idCategoria','a.stock as stock')
                    ->orderby('a.idArticulo','desc')
                    ->get();
*/
        //dd($prog_anual_prods);
        return $prog_anual_prods;


     }
     	public static function getprog_anual_prodd($id){
        $prog_anual_prodd = Mprog_anual_prod::find($id);

        return $prog_anual_prodd;
    }

}
