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

class Cuerh extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('1');
            $empresa = Mempresas::getempresa('1');
            $productos = Mproductos::getproductos('1');
            $ejecutado_prods = Mejecutado_prod::getejecutado_prods('1');
            $proyeccion_ingresoss = Mproyeccion_ingresos::getproyeccion_ingresoss('1');
              $programacion_ingresoss = Mprogramacion_ingresos::getprogramacion_ingresoss('1');
              $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('1');
              $prog_anual_ings = Mprog_anual_ing::getprog_anual_ings('1');
              $prog_mes_prods = Mprog_mes_prod::getprog_mes_prods('1');
              $prog_mes_ings = Mprog_mes_ing::getprog_mes_ings('1');
              $presupuestogastados = Mpresupuestogastado::getpresupuestogastados('1');
               $ejecucion_gastoss = Mejecucion_gastos::getejecucion_gastoss('1');
               $inventario_productoss = Minventario_productos::getinventario_productoss('1');
               $cuentas_cobros = Mcuentas::getcuentas_cobros('1');
            //print_r($empresas);
        return view('empresas/Vuerh')
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
        //return view('empresas/Vproductos');

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

        $empresas1 = Mempresas::find($id);

        return view('edit/Veditemp',['empresas1'=>$empresas1]);
        //$empresas1 = Mempresas::getempresas1($id);
        //return view('edit/Veditemp',['$empresas1=>$empresas1']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function editpro($id)
    {

        $productos1 = Mproductos::find($id);

        return view('edit/Veditprod',['productos1'=>$productos1]);
        //$empresas1 = Mempresas::getempresas1($id);
        //return view('edit/Veditemp',['$empresas1=>$empresas1']);
    }

    public function editproganual($id)
    {

        $prog_anual_prodd = Mprog_anual_prod::find($id);

        return view('edit/Vprodanual',['prog_anual_prodd'=>$prog_anual_prodd]);
        //$empresas1 = Mempresas::getempresas1($id);
        //return view('edit/Veditemp',['$empresas1=>$empresas1']);
    }

     public function editprogmensual($id)
    {

        $prog_mensual_prodd = Mprog_mes_prod::find($id);

        return view('edit/Vprogmensual',['prog_mensual_prodd'=>$prog_mensual_prodd]);
        //$empresas1 = Mempresas::getempresas1($id);
        //return view('edit/Veditemp',['$empresas1=>$empresas1']);
    }
    public function update(Request $request, $id)
    {
         // >>> getproducto(id)
        $empresas1 = Mempresas::getempresas1($id);
        // >>> setDatos()
        $empresas1->empresa= $request->tbempresa;
        $empresas1->descripcion=$request->tbdescripcion;
        $empresas1->gerente=$request->tbgerente;
        $empresas1->telefono=$request->tbtelefono;
        $empresas1->direccion=$request->tbdireccion;
        // >>> update()
        $empresas1->update();
        // === index()

        return Redirect::to('/uerh');


    }
    public function updatepro(Request $request, $id)
    {
         // >>> getproducto(id)
        $productos1 = Mproductos::getproductos1($id);
        // >>> setDatos()
        $productos1->producto= $request->tbproducto;
        $productos1->descripcion=$request->tbdescripcion;
        $productos1->unidad=$request->tbunidad;

        // >>> update()
        $productos1->update();
        // === index()

        return Redirect::to('/uerh');


    }

    public function updateproganual(Request $request, $id)
    {
         // >>> getproducto(id)
        $prog_anual_prodd = Mprog_anual_prod::getprog_anual_prodd($id);
        // >>> setDatos()
        $prog_anual_prodd->programado= $request->tbprogramado;
        $prog_anual_prodd->anho=$request->tbanho;

        // >>> update()
        $prog_anual_prodd->update();
        // === index()

        return Redirect::to('/uerh');


    }

    public function updateprogmensual(Request $request, $id)
    {
         // >>> getproducto(id)
        $prog_mensual_prodd = Mprog_mes_prod::getprog_mensual_prodd($id);
        // >>> setDatos()
        $prog_mensual_prodd->programado_mes= $request->tbprogmensual;
        $prog_mensual_prodd->mes=$request->tbmes;


        // >>> update()
        $prog_mensual_prodd->update();
        // === index()

        return Redirect::to('/uerh');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id_producto)
    {
        //$producto1 = Mproductos::findOrFail($id_producto);
        $producto1 = Mproductos::findOrFail($id_producto);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
        $producto1->delete();
        return Redirect::to('/uerh');

    }

}
