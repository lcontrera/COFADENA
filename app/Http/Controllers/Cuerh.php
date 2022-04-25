<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\models\Mempresas;
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

class Cuerh extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*return DB::select("
        select * from prog_anual_prod pr inner join productos p on pr.idproducto =p.idproducto
            ");*/

            //$empresas = Mempresas::getempresas();
            // JOIN Programado anual y producto

            $productos = Mproductos::getproductos('1');
            $ejecutado_prod = Mejecutado_prod::getejecutado_prod();
            $proyeccion_ingresos = Mproyeccion_ingresos::getproyeccion_ingresos();
              $programacion_ingresos = Mprogramacion_ingresos::getprogramacion_ingresos();
              $prog_anual_prod = Mprog_anual_prod::getprog_anual_prod();
              $prog_anual_ing = Mprog_anual_ing::getprog_anual_ing();
              $prog_mes_prod = Mprog_mes_prod::getprog_mes_prod();
              $prog_mes_ing = Mprog_mes_ing::getprog_mes_ing();
              $presupuestogastado = Mpresupuestogastado::getpresupuestogastado();
               $ejecucion_gastos = Mejecucion_gastos::getejecucion_gastos();
               $inventario_productos = Minventario_productos::getinventario_productos();
               $cuentas_cobro = Mcuentas::getcuentas_cobro();
            //print_r($empresas);
        return view('empresas/Vuerh')
            ->with ([
              //'empresas'=>$empresas,
                'productos'=>$productos,
                'ejecutado_prod'=>$ejecutado_prod,
                'proyeccion_ingresos'=>$proyeccion_ingresos,
                'programacion_ingresos'=>$programacion_ingresos,
                'prog_anual_prod'=>$prog_anual_prod,
                'prog_anual_ing'=>$prog_anual_ing,
                'prog_mes_prod'=>$prog_mes_prod,
                'prog_mes_ing'=>$prog_mes_ing,
                'presupuestogastado'=>$presupuestogastado,
                'ejecucion_gastos'=>$ejecucion_gastos,
                'inventario_productos'=>$inventario_productos,
                'cuentas_cobro'=>$cuentas_cobro,
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

        //return view('empresas/Vproductos');

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
         // >>> construct()
        $producto = new Mproductos();
        // >>> setDatos()
        $producto->producto = $request->tbproducto;
        $producto->descripcion = $request->tbdescripcion;
        $producto->unidad = $request->tbunidad;
        // >>> save()
        $producto->save();
        // === index()
        return Redirect::to('/productos');
        // >>> construct()
        $prog_anual_prod = new Mprog_anual_ing();
        // >>> setDatos()
        $prog_anual_prod->idproducto = $request->cbproducto;
        $prog_anual_prod->programado = $request->tbprog_anual_prod;
        $prog_anual_prod->anho = $request->tbaño;
        $prog_anual_prod->estado = 1;
        $prog_anual_prod->save();

        return Redirect::to('/prog_anual_prod');

/*
           // >>> construct()
        $produccion = new Mejecutado_prod();
        // >>> setDatos()
        $produccion->cantidad_ejecutada = $request->tbcantidad_ejecutada;
        $produccion->cumplimiento_porcentaje = $request->tbcumplimiento_porcentaje;
        $produccion->total_prod_mes = $request->tbtotal_prod_mes;
        $produccion->porcentaje_cumplimiento = $request->tbporcentaje_cumplimiento;
        $produccion->porcentaje_uso_anual = $request->tbporcentaje_cumplimiento_anual;
        $produccion->fecha1 = $request->tbfecha1;
        // >>> save()
        $produccion->save();
        // === index()
        return Redirect::to('/produccion');*/
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
        $prog_anual_prod = Mproductos::getproductos($id);
        // <<< show(categoria)


        return view('prog_anual_prod/Vprog_anual_prod',['productos'=>$productos]);
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
         // >>> getproducto(id)
        $producto = Mproductos::getproducto($id);
        // >>> setDatos()
        $producto->producto= $request->tbproducto;
        $producto->descripcion=$request->tbdescripcion;
        // >>> update()
        $producto->update();
        // === index()

        return Redirect::to('/productos');

        $produccion = Mejecutado_prod::getproduccion($id);
         $produccion->cantidad_ejecutada = $request->tbcantidad_ejecutada;
        $produccion->cumplimiento_porcentaje = $request->tbcumplimiento_porcentaje;
        $produccion->total_prod_mes = $request->tbtotal_prod_mes;
        $produccion->porcentaje_cumplimiento = $request->tbporcentaje_cumplimiento;
        $produccion->porcentaje_uso_anual = $request->tbporcentaje_cumplimiento_anual;
        $produccion->fecha1 = $request->tbfecha1;$produccion->update();
        // === index()

        return Redirect::to('/produccion');
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
    public function productos()
    {

        return view('create/Vproductos');


    }
    public function produccion()
    {

        return view('create/Vproduccion');

    }
    public function prog_anual_prod()
    {

        return view('create/Vprog_anual_prod');

    }
}
