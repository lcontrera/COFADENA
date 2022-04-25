<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mprog_mes_ing extends Model
{
    use HasFactory;
    protected $table = 'prog_mes_ing';
     protected $primaryKey = 'idprog_mes_ing';
     protected $fillable = [
     	'idproducto',
        'programado_mes1',
        'mes1'
    ];
    	public $timestamps=false;

    	 public static function getprog_mes_ing(){
        $prog_mes_ing = Mprog_mes_ing::all();

        return $prog_mes_ing;
    }
}
