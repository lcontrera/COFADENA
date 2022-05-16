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
class Cupab extends Controller
{

    public function index()
    {
        $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('2');
            $empresa = Mempresas::getempresa('2');
            $productos = Mproductos::getproductos('2');
            $ejecutado_prods = Mejecutado_prod::getejecutado_prods('2');
            $proyeccion_ingresoss = Mproyeccion_ingresos::getproyeccion_ingresoss('2');
              $programacion_ingresoss = Mprogramacion_ingresos::getprogramacion_ingresoss('2');
              $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('2');
              $prog_anual_ings = Mprog_anual_ing::getprog_anual_ings('2');
              $prog_mes_prods = Mprog_mes_prod::getprog_mes_prods('2');
              $prog_mes_ings = Mprog_mes_ing::getprog_mes_ings('2');
              $presupuestogastados = Mpresupuestogastado::getpresupuestogastados('2');
               $ejecucion_gastoss = Mejecucion_gastos::getejecucion_gastoss('2');
               $inventario_productoss = Minventario_productos::getinventario_productoss('2');
               $cuentas_cobros = Mcuentas::getcuentas_cobros('2');
            //print_r($empresas);
        return view('empresas/Vupab')
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

