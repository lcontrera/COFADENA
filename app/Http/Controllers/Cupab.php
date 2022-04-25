<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mproductos_upab;
use App\models\Mejecutado_prod__upab;
use App\models\Mproyeccion_ingresos_upab;
use App\models\Mprogramacion_ingresos_upab;
use App\models\Mpresupuestogastado_upab;
use App\models\Mejecucion_gastos_upab;
use App\models\Minventario_productos_upab;
use App\models\Mcuentas_upab;

use Illuminate\Support\Facades\Redirect;
class Cupab extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            //$empresas = Mempresas::getempresas();

            $productos_upab = Mproductos_upab::getproductos_upab();
            $ejecutado_prod_upab = Mejecutado_prod__upab::getejecutado_prod_upab();
            $proyeccion_ingresos_upab = Mproyeccion_ingresos_upab::getproyeccion_ingresos_upab();
              $programacion_ingresos_upab = Mprogramacion_ingresos_upab::getprogramacion_ingresos_upab();
              $presupuestogastado_upab = Mpresupuestogastado_upab::getpresupuestogastado_upab();
               $ejecucion_gastos_upab = Mejecucion_gastos_upab::getejecucion_gastos_upab();
               $inventario_productos_upab = Minventario_productos_upab::getinventario_productos_upab();
               $cuentas_cobro_upab = Mcuentas_upab::getcuentas_cobro_upab();
            //print_r($empresas);
        return view('empresas/Vupab')
            ->with ([
              //'empresas'=>$empresas,
                'productos_upab'=>$productos_upab,
                'ejecutado_prod_upab'=>$ejecutado_prod_upab,
                'proyeccion_ingresos_upab'=>$proyeccion_ingresos_upab,
                'programacion_ingresos_upab'=>$programacion_ingresos_upab,
                'presupuestogastado_upab'=>$presupuestogastado_upab,
                'ejecucion_gastos_upab'=>$ejecucion_gastos_upab,
                'inventario_productos_upab'=>$inventario_productos_upab,
                'cuentas_cobro_upab'=>$cuentas_cobro_upab,
            ]);


                //'presupuestogastado'=>$presupuestogastado,
                //'productos'=>$productos,


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas/Vupab');
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
         // >>> getCategoria(id)
        $empresa = MCategoria::getempresa($id);
        // <<< show(categoria)


        return view('empresas/Vedit',['empresas'=>$empresa]);
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

