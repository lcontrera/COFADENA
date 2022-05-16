<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mempresas;
use App\models\Mproductos;
use App\models\Mejecutado_prod;
use App\models\Mproyeccion_ingresos;
use App\models\Mprogramacion_ingresos;
use App\models\Mpresupuestogastado;
use App\models\Mejecucion_gastos;
use App\models\Minventario_productos;
use App\models\Mcuentas;
use App\models\Mprog_anual_prod;
use App\models\Mprog_mes_prod;
use App\models\Mprog_anual_ing;
use App\models\Mprog_mes_ing;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class Cuepi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('6');
            $empresa = Mempresas::getempresa('6');
            $productos = Mproductos::getproductos('6');
            $ejecutado_prods = Mejecutado_prod::getejecutado_prods('6');
            $proyeccion_ingresoss = Mproyeccion_ingresos::getproyeccion_ingresoss('6');
              $programacion_ingresoss = Mprogramacion_ingresos::getprogramacion_ingresoss('6');
              $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('6');
              $prog_anual_ings = Mprog_anual_ing::getprog_anual_ings('6');
              $prog_mes_prods = Mprog_mes_prod::getprog_mes_prods('6');
              $prog_mes_ings = Mprog_mes_ing::getprog_mes_ings('6');
              $presupuestogastados = Mpresupuestogastado::getpresupuestogastados('6');
               $ejecucion_gastoss = Mejecucion_gastos::getejecucion_gastoss('6');
               $inventario_productoss = Minventario_productos::getinventario_productoss('6');
               $cuentas_cobros = Mcuentas::getcuentas_cobros('6');
            //print_r($empresas);
        return view('empresas/Vuepi')
            ->with ([
                'empresa'=>$empresa,
                'productos'=>$productos,
                'ejecutado_prods'=>$ejecutado_prods,
                'proyeccion_ingresoss'=>$proyeccion_ingresoss,
                'programacion_ingresoss'=>$programacion_ingresoss,
                'prog_anual_prods'=>$prog_anual_prods,
                'prog_anual_ings'=>$prog_anual_ings,
                'prog_mes_prods'=>$prog_mes_prods,
                'prog_mes_ings'=>$prog_mes_ings,
                'presupuestogastados'=>$presupuestogastados,
                'ejecucion_gastoss'=>$ejecucion_gastoss,
                'inventario_productoss'=>$inventario_productoss,
                'cuentas_cobros'=>$cuentas_cobros,
            ]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas/Vfichas');
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
        $empresas1 = Mempresas::find($id);

        return view('edit/Veditemp',['empresas1'=>$empresas1]);
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
