<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mproductos_ugc23m;
use App\models\Mejecutado_prod_ugc23m;
use App\models\Mproyeccion_ingresos_ugc23m;
use App\models\Mprogramacion_ingresos_ugc23m;
use App\models\Mpresupuestogastado_ugc23m;
use App\models\Mejecucion_gastos_ugc23m;
use App\models\Minventario_productos_ugc23m;
use App\models\Mcuentas_ugc23m;

use Illuminate\Support\Facades\Redirect;
class Cug23 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $productos_ugc23m = Mproductos_ugc23m::getproductos_ugc23m();
            $ejecutado_prod_ugc23m = Mejecutado_prod_ugc23m::getejecutado_prod_ugc23m();
            $proyeccion_ingresos_ugc23m = Mproyeccion_ingresos_ugc23m::getproyeccion_ingresos_ugc23m();
              $programacion_ingresos_ugc23m = Mprogramacion_ingresos_ugc23m::getprogramacion_ingresos_ugc23m();
              $presupuestogastado_ugc23m = Mpresupuestogastado_ugc23m::getpresupuestogastado_ugc23m();
               $ejecucion_gastos_ugc23m = Mejecucion_gastos_ugc23m::getejecucion_gastos_ugc23m();
               $inventario_productos_ugc23m = Minventario_productos_ugc23m::getinventario_productos_ugc23m();
               $cuentas_cobro_ugc23m = Mcuentas_ugc23m::getcuentas_cobro_ugc23m();
            //print_r($empresas);
        return view('empresas/Vug23')
            ->with ([
              //'empresas'=>$empresas,
                'productos_ugc23m'=>$productos_ugc23m,
                'ejecutado_prod_ugc23m'=>$ejecutado_prod_ugc23m,
                'proyeccion_ingresos_ugc23m'=>$proyeccion_ingresos_ugc23m,
                'programacion_ingresos_ugc23m'=>$programacion_ingresos_ugc23m,
                'presupuestogastado_ugc23m'=>$presupuestogastado_ugc23m,
                'ejecucion_gastos_ugc23m'=>$ejecucion_gastos_ugc23m,
                'inventario_productos_ugc23m'=>$inventario_productos_ugc23m,
                'cuentas_cobro_ugc23m'=>$cuentas_cobro_ugc23m,
            ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('empresas/Vug23');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
