<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Muerh extends Model
{
    use HasFactory;

    // ATRIBUTOS

    protected $table = 'empresas';
    protected $primaryKey = 'idempresa';
    protected $fillable = [
        'empresa',
        'desccripcion',
        'gerente',
        'direccion',
        'telefono_ref'
    ];

    public $timestamps=false;

    // METODOS
    // public static function getCategorias(){
    //     $categorias = MCategoria::all()->where('estado',1);
    //     return $categorias;
    // }

    // OBTENER CATEGORIAS
    public static function getempresas(){
        $empresas=Muerh::all();
        return $empresas;
    }

    public static function getempresa($id){
        $empresa = Muerh::find($id);
        return $empresa;
    }



}


