<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcuentas extends Model
{
    use HasFactory;
    	protected $table = 'cuentas_cobro';
    protected $primaryKey = 'idcuentas';
    protected $fillable = [
        'idempresa',
        'descripcion',
        'deudor',
        'monto_total',
        'fecha',
        'pagado',
        'fecha_pago',
        'saldo_deuda'
    ];

    public $timestamps=false;

    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER ARTICULOS
	   public static function getcuentas_cobro(){
	        $cuentas_cobro = Mcuentas::all();

	        return $cuentas_cobro;
}
         public static function getcuentas_cobros($empresa){
        $cuentas_cobros = Mcuentas::where('idempresa', $empresa)->get();

        return $cuentas_cobros;


     }


}
