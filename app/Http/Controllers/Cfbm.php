<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mproductos_fbm;
use App\models\Mejecutado_prod_fbm;
use App\models\Mproyeccion_ingresos_fbm;
use App\models\Mprogramacion_ingresos_fbm;
use App\models\Mpresupuestogastado_fbm;
use App\models\Mejecucion_gastos_fbm;
use App\models\Minventario_productos_fbm;
use App\models\Mcuentas_fbm;

use Illuminate\Support\Facades\Redirect;
class Cfbm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $productos_fbm = Mproductos_fbm::getproductos_fbm();
            $ejecutado_prod_fbm = Mejecutado_prod_fbm::getejecutado_prod_fbm();
            $proyeccion_ingresos_fbm = Mproyeccion_ingresos_fbm::getproyeccion_ingresos_fbm();
              $programacion_ingresos_fbm = Mprogramacion_ingresos_fbm::getprogramacion_ingresos_fbm();
              $presupuestogastado_fbm = Mpresupuestogastado_fbm::getpresupuestogastado_fbm();
               $ejecucion_gastos_fbm = Mejecucion_gastos_fbm::getejecucion_gastos_fbm();
               $inventario_productos_fbm = Minventario_productos_fbm::getinventario_productos_fbm();
               $cuentas_cobro_fbm = Mcuentas_fbm::getcuentas_cobro_fbm();
            //print_r($empresas);
        return view('empresas/Vfbm')
            ->with ([
              //'empresas'=>$empresas,
                'productos_fbm'=>$productos_fbm,
                'ejecutado_prod_fbm'=>$ejecutado_prod_fbm,
                'proyeccion_ingresos_fbm'=>$proyeccion_ingresos_fbm,
                'programacion_ingresos_fbm'=>$programacion_ingresos_fbm,
                'presupuestogastado_fbm'=>$presupuestogastado_fbm,
                'ejecucion_gastos_fbm'=>$ejecucion_gastos_fbm,
                'inventario_productos_fbm'=>$inventario_productos_fbm,
                'cuentas_cobro_fbm'=>$cuentas_cobro_fbm,
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas/Vfbm');
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
