<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcuentas_ugc23m extends Model
{
    use HasFactory;
    	protected $table = 'cuentas_cobro_ugc23m';
    protected $primaryKey = 'idcuentas';
    protected $fillable = [
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
	   public static function getcuentas_cobro_ugc23m(){
	        $cuentas_cobro_ugc23m = Mcuentas_ugc23m::all();

	        return $cuentas_cobro_ugc23m;
}
}