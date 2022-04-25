<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcuentas_fbm extends Model
{
    use HasFactory;
    	protected $table = 'cuentas_cobro_fbm';
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
    //     $categorias_fbm = MCategoria_fbm::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER ARTICULOS
	   public static function getcuentas_cobro_fbm(){
	        $cuentas_cobro_fbm = Mcuentas_fbm::all();

	        return $cuentas_cobro_fbm;
}
}
