<?php

namespace App\Http\Controllers;
use App\models\Mprog_anual_prod;
use App\models\Mproductos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class Cprogramacion_ingresos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prog_anual_prod = Mprog_anual_prod::getprog_anual_prod();
        return view('empresas/Vuerh',['prog_anual_prod'=>$prog_anual_prod ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $productos=Mproductos::getproductos("");
            return view('create/Vprog_anual_prod',['productos'=>$productos]);

        return view('empresas/Vproduccion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $prog_anual_prod = new Mprog_anual_prod();
        // >>> setDatos()
        $prog_anual_prod->idproducto = $request->cbproducto;
        $prog_anual_prod->programado = $request->tbprog_anual_prod;
        $prog_anual_prod->anho = $request->tbaño;


        return Redirect::to('/prog_anual_prod');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
