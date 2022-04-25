<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mproductos_enauto;
use App\models\Mejecutado_prod_enauto;
use App\models\Mproyeccion_ingresos_enauto;
use App\models\Mprogramacion_ingresos_enauto;
use App\models\Mpresupuestogastado_enauto;
use App\models\Mejecucion_gastos_enauto;
use App\models\Minventario_productos_enauto;
use App\models\Mcuentas_enauto;

use Illuminate\Support\Facades\Redirect;
class Cenauto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos_enauto = Mproductos_enauto::getproductos_enauto();
            $ejecutado_prod_enauto = Mejecutado_prod_enauto::getejecutado_prod_enauto();
            $proyeccion_ingresos_enauto = Mproyeccion_ingresos_enauto::getproyeccion_ingresos_enauto();
              $programacion_ingresos_enauto = Mprogramacion_ingresos_enauto::getprogramacion_ingresos_enauto();
              $presupuestogastado_enauto = Mpresupuestogastado_enauto::getpresupuestogastado_enauto();
               $ejecucion_gastos_enauto = Mejecucion_gastos_enauto::getejecucion_gastos_enauto();
               $inventario_productos_enauto = Minventario_productos_enauto::getinventario_productos_enauto();
               $cuentas_cobro_enauto = Mcuentas_enauto::getcuentas_cobro_enauto();
            //print_r($empresas);
        return view('empresas/Venauto')
            ->with ([
              //'empresas'=>$empresas,
                'productos_enauto'=>$productos_enauto,
                'ejecutado_prod_enauto'=>$ejecutado_prod_enauto,
                'proyeccion_ingresos_enauto'=>$proyeccion_ingresos_enauto,
                'programacion_ingresos_enauto'=>$programacion_ingresos_enauto,
                'presupuestogastado_enauto'=>$presupuestogastado_enauto,
                'ejecucion_gastos_enauto'=>$ejecucion_gastos_enauto,
                'inventario_productos_enauto'=>$inventario_productos_enauto,
                'cuentas_cobro_enauto'=>$cuentas_cobro_enauto,
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('empresas/Venauto');
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
