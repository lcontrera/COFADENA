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
use Carbon\Carbon;
class Cfbm extends Controller
{
    public function indexgraphfbm(){
        $ejecucion_gastoss = Mejecucion_gastos::getejecucion_gastoss("5");
        $presupuestogastadJson = Mpresupuestogastado::getpresupuestogastadJSON("5");
        //print_r($ejecucion_gastos);
       return view('empresas/Vug23')
            ->with(['ejecucion_gastoss'=>$ejecucion_gastoss,
                    'presupuestogastadJson'=>$presupuestogastadJson,
        ]);

     }

    public function buscar(Request $request)
    {
        $ejecutado_prods = Mejecutado_prod::select('ejecutado_prods.idproducto', 'productos.idproducto', 'productos.idproducto', 'productos.producto')
            ->getejecutado_prods($request->tbBuscar);



       // return dd($ejecutado_prods);

            //echo $ejecutado_prods;
            //return redirect()->back()->with('ejecutado_prods',$ejecutado_prods);

       return view('empresas/Vfbm',['ejecutado_prods'=>$ejecutado_prods]);
    }

         public function indexgraph(){
        $ejecucion_gastoss = Mejecucion_gastos::getejecucion_gastoss("5");
        $presupuestogastad = Mpresupuestogastado::getpresupuestogastadJSON("5");
        //print_r($ejecucion_gastos);
        return view('empresas/Vfbm')
            ->with(['ejecucion_gastoss'=>$ejecucion_gastoss,
                    'presupuestogastad'=>$presupuestogastad,
        ]);

     }
    public function index()
    {
        $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('5');
            $empresa = Mempresas::getempresa('5');
            $productos = Mproductos::getproductos('5');
            $ejecutado_prods = Mejecutado_prod::getejecutado_prods('5');
            $proyeccion_ingresoss = Mproyeccion_ingresos::getproyeccion_ingresoss('5');
              $programacion_ingresoss = Mprogramacion_ingresos::getprogramacion_ingresoss('5');
              $prog_anual_prods = Mprog_anual_prod::getprog_anual_prods('5');
              $prog_anual_ings = Mprog_anual_ing::getprog_anual_ings('5');
              $prog_mes_prods = Mprog_mes_prod::getprog_mes_prods('5');
              $prog_mes_ings = Mprog_mes_ing::getprog_mes_ings('5');
              $presupuestogastados = Mpresupuestogastado::getpresupuestogastados('5');
              $presupuestogastad = Mpresupuestogastado::getpresupuestogastad('5');
               $ejecucion_gastoss = Mejecucion_gastos::getejecucion_gastoss('5');
               $inventario_productoss = Minventario_productos::getinventario_productoss('5');
               $cuentas_cobros = Mcuentas::getcuentas_cobros('5');
               $presupuestogastadJson = Mpresupuestogastado::getpresupuestogastadJSON("5");
            //print_r($empresas);
        return view('empresas/Vfbm')
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
                'presupuestogastad'=>$presupuestogastad,
                'ejecucion_gastoss'=>$ejecucion_gastoss,
                'inventario_productoss'=>$inventario_productoss,
                'cuentas_cobros'=>$cuentas_cobros,
                'presupuestogastadJson'=>$presupuestogastadJson,
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
    public function editproganualing($id)
    {

        $prog_anual_ingg = Mprog_anual_ing::find($id);
        //dd ($prog_anual_ingg);
        return view('edit/Vproganualing',['prog_anual_ingg'=>$prog_anual_ingg]);
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
    public function editprogmensualing($id)
    {

        $prog_mensual_ingg = Mprog_mes_ing::find($id);

        return view('edit/Vprogmensualing',['prog_mensual_ingg'=>$prog_mensual_ingg]);
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

        return Redirect::to('/fbm');


    }
    public function updatepro(Request $request, $id)
    {
         // >>> getproducto(id)
        $productos1 = Mproductos::getproducto1($id);
        // >>> setDatos()
        $productos1->producto= $request->tbproducto;
        $productos1->descripcionn=$request->tbdescripcionn;
        $productos1->unidad=$request->tbunidad;

        // >>> update()
        $productos1->update();
        // === index()

        return Redirect::to('/fbm');


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

        return Redirect::to('/fbm');


    }

    public function updateproganualing(Request $request, $id)
    {
         // >>> getproducto(id)
        $prog_anual_ingg = Mprog_anual_ing::getprog_anual_ingg($id);
        // >>> setDatos()
        $prog_anual_ingg->programado1= $request->tbprogramado;
        $prog_anual_ingg->anho1=$request->tbanho;

        // >>> update()
        $prog_anual_ingg->update();
        // === index()

        return Redirect::to('/fbm');


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

        return Redirect::to('/fbm');


    }
    public function updateprogmensualing(Request $request, $id)
    {
         // >>> getproducto(id)
        $prog_mensual_ingg = Mprog_mes_ing::getprog_mensual_ing($id);
        // >>> setDatos()
        $prog_mensual_ingg->programado_mes1= $request->tbprogmensual;
        $prog_mensual_prodd->mes1=$request->tbmes;


        // >>> update()
        $prog_mensual_prodd->update();
        // === index()

        return Redirect::to('/fbm');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function destroyprod(int $idproducto1)
    {
        //$producto1 = Mproductos::findOrFail($id_producto);
             $produccion = Mejecutado_prod::findOrFail($idproducto1);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
               $produccion->delete();
        return Redirect::to('/fbm');

    }

public function destroying(int $idproyeccion_ingresos)
    {
        //$producto1 = Mproductos::findOrFail($id_producto);
        $proyeccion_ingresoss = Mproyeccion_ingresos::findOrFail($idproyeccion_ingresos);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
               $proyeccion_ingresoss->delete();
        return Redirect::to('/fbm');

    }
    public function destroyprog(int $idprogramacion_ingresos)
    {
        //$producto1 = Mproductos::findOrFail($id_producto);
        $programacion_ingresoss = Mprogramacion_ingresos::findOrFail($idprogramacion_ingresos);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
               $programacion_ingresoss->delete();
        return Redirect::to('/fbm');

    }
    public function destroypres(int $idpresupuestogastado)
    {
        //$producto1 = Mproductos::findOrFail($id_producto);
        $presupuestogastados = Mpresupuestogastado::findOrFail($idpresupuestogastado);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
               $presupuestogastados->delete();
        return Redirect::to('/fbm');

    }
    public function destroyinv(int $idinventarios)
    {
        //echo('test3');
        //$producto1 = Mproductos::findOrFail($id_producto);
        $inventario_productoss = Minventario_productos::findOrFail($idinventarios);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
               $inventario_productoss->delete();
        return Redirect::to('/fbm');

    }
      public function destroycue(int $idcuentas)
    {
        //$producto1 = Mproductos::findOrFail($id_producto);
        $cuentas_cobros = Mcuentas::findOrFail($idcuentas);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
               $cuentas_cobros->delete();
        return Redirect::to('/fbm');

    }
    public function destroyeg(int $idejecuciongastos)
    {
        //$producto1 = Mproductos::findOrFail($id_producto);
             $ejecucion_gastoss = Mejecucion_gastos::findOrFail($idejecuciongastos);
        //dd($pro);
        //$producto1 = Mproductos::getproducto1($id);
               $ejecucion_gastoss->delete();
        return Redirect::to('/fbm');

    }



}
