<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcuentas_upab extends Model
{
    use HasFactory;
    	protected $table = 'cuentas_cobro_upab';
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
	   public static function getcuentas_cobro_upab(){
	        $cuentas_cobro_upab = Mcuentas_upab::all();

	        return $cuentas_cobro_upab;
}
}
