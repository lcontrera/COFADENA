<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mempresas extends Model
{
    use HasFactory;
   // ATRIBUTOS
    	protected $table = 'empresas';
     protected $primaryKey = 'idempresa';
     protected $fillable = [
     	'empresa',
        'descripcion',
        'gerente',
        'telefono',
        'direccion',
        'anho_creacion',
        'dec_supremo_doc_creacion',
        'persona_enlace_cargo'
    ];
    	public $timestamps=false;

    	 public static function getempresas(){
        $empresas = Mempresas::all();

        return $empresas;
    }
         public static function getempresa($empresa){
        $empresa = Mempresas::where('idempresa', $empresa)->get();

        return $empresa;


     }
      public static function getempresas1($id){
        $empresas1 = Mempresas::find($id);

        return $empresas1;
    }

}
