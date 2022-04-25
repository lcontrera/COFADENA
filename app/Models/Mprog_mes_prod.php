<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprog_mes_prod extends Model
{
    use HasFactory;
    protected $table = 'prog_mes_prod';
     protected $primaryKey = 'idprog_mes_prod';
     protected $fillable = [
     	'idproducto',
        'programado_mes',
        'mes'
    ];
    	public $timestamps=false;

    	 public static function getprog_mes_prod(){
        $prog_mes_prod = Mprog_mes_prod::all();

        return $prog_mes_prod;
    }
}
