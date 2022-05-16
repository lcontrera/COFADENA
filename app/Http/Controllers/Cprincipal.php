<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mempresas;
use App\models\Mproductos;
use App\models\Mprog_mes_ing;
use App\models\Mprog_anual_ing;
use App\models\Mprog_mes_prod;
use App\models\Mprog_anual_prod;
use App\models\Mpresupuestogastado;
use App\models\Mejecucion_gastos;
use DB;
use Illuminate\Support\Facades\Redirect;
class Cprincipal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('principal/Vinicio');
    }


    public function storeEmpresa(Request $request)
    {
       // $empresas=new Mempresas();
          //  $empresas->idempresa = $request->cbempresa;
      //  $empresas->descripcion = $request->tbdescripcion;
//$empresas->gerente = $request->tbgerente;
       // $empresas->telefono = $request->tbtelefono;
    //    $empresas->direccion = $request->tbdireccion;
       // $empresas->save();
     //   $empresas=new Mempresas();

        // realizar cambio dinamico pendiente
        return Redirect::to('/uerh');

    }

     public function storeProductos(Request $request)
    {

 $idempresa = $request->cbempresa;
 $producto = $request->tbproducto;
 $descripcion = $request->tbdescripcion;
 $unidad = $request->tbunidad;
 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into productos (idempresa, producto, descripcion, unidad) values(?, ?, ?, ?)',[$idempresa, $producto, $descripcion, $unidad]);
         //$producto->producto = $request->input('cbproductos');
        //$producto->descripcion = $request->tbdescripcion;
        //$producto->unidad = $request->tbunidad;
        //$producto->idempresa = $request->cbempresa;



        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }

public function storeprog_anual_prod(Request $request)
    {
        //dd($request->all());
  $idempresa = $request->cbempresa;
 $idproducto = $request->cbproducto;
 $programado = $request->tbprog_anual_prod;
 $anho = $request->tbanho;
 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into prog_anual_prod (idempresa, idproducto, programado, anho) values(?, ?, ?, ?)',[$idempresa, $idproducto, $programado, $anho]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }


public function storeprog_mensual_prod(Request $request)
    {
  $idempresa = $request->cbempresa;
 $idproducto = $request->cbproducto;
 $programado_mes = $request->tbprog_mes_prod;
 $mes = $request->tbmes;
 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into prog_mes_prod (idempresa, idproducto, programado_mes, mes) values(?, ?, ?, ?)',[$idempresa, $idproducto, $programado_mes, $mes]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }


public function storeproduccion(Request $request)
    {
  $idempresa = $request->cbempresa;
 $idproducto = $request->cbproducto;
 $idprog_mes_prod = $request->cbrog_mes_prod;
 $idprog_anual_prod = $request->cbprog_anual_prod;
 $cantidad_ejecutada = $request->tbcantidad_ejecutada;
 $fecha1 = $request->tbfecha1;
 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into ejecutado_prod (idempresa, idproducto, idprog_mes_prod, idprog_anual_prod, cantidad_ejecutada, fecha1) values(?, ?, ?, ?,?,?)',[$idempresa, $idproducto,$prog_mes_prods,$idprog_anual_prod, $cantidad_ejecutada, $fecha1]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }

public function storeprog_anual_ing(Request $request)
    {
  $idempresa = $request->cbempresa;
 $idproducto = $request->cbproducto;
 $programado1 = $request->tbprog_anual_ing;
 $anho1 = $request->tbanho;
 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into prog_anual_ing (idempresa, idproducto, programado1, anho1) values(?, ?, ?, ?)',[$idempresa, $idproducto, $programado1, $anho1]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }


public function storeprog_mensual_ing(Request $request)
    {
  $idempresa = $request->cbempresa;
 $idproducto = $request->cbproducto;
 $programado_mes1 = $request->tbprog_mes_ing;
 $mes1 = $request->tbmes;
 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into prog_mes_ing (idempresa, idproducto, programado_mes1, mes1) values(?, ?, ?, ?)',[$idempresa, $idproducto, $programado_mes1, $mes1]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }


public function storeingresos(Request $request)
    {
  $idempresa = $request->cbempresa;
 $idproducto = $request->cbproducto;
 $idprog_mes_ing = $request->tbprog_mes_ing;
 $cantidad_ejecutadames = $request->tbcantidad_ejecutada;
 $fecha1 = $request->tbfecha1;
 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into proyeccion_ingresos (idempresa, idproducto, idprog_mes_ing, fecha1) values(?, ?, ?, ?)',[$idempresa, $idproducto, $idprog_mes_ing, $fecha1]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }

public function storeprog_ingresos(Request $request)
    {
  $idempresa = $request->cbempresa;
 $idproducto = $request->cbproducto;
 $cantidad = $request->tbcantidad;
 $precio = $request->tbprecio;
 $fecha3 = $request->tbfecha3;

 //$producto->producto = $request->input('cbproductos');
      DB::insert('insert into programacion_ingresos (idempresa, idproducto, cantidad, precio, fecha3) values(?, ?, ?, ?, ?)',[$idempresa, $idproducto, $cantidad, $precio, $fecha3]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }

public function storepresupuestogastado(Request $request)
    {
  $idempresa = $request->cbempresa;
  $grupo = $request->cbgrupo;
 $presupuesto_anual = $request->tbpresupuesto;
 $ganancia_mensual = $request->tbganacia_mensual;
 $fecha = $request->tbfecha;

      DB::insert('insert into presupuestogastado (idempresa, grupo, presupuesto_anual, ganancia_mensual, fecha) values(?, ?, ?, ?, ?)',[$idempresa, $grupo, $presupuesto_anual, $ganancia_mensual, $fecha]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }

public function storeejecucion_gastos(Request $request)
    {
  $idempresa = $request->cbempresa;
  $ejecucion_gastos = $request->cbdetalle;
 $ganancia_mensual = $request->tbmensual;
 $fecha4 = $request->tbfecha4;

      DB::insert('insert into ejecucion_gastos (idempresa, ejecucion_gastos, ganancia_mensual, fecha4) values(?, ?, ?, ?)',[$idempresa, $ejecucion_gastos, $ganancia_mensual, $fecha4]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }

public function storeinventarios(Request $request)
    {
  $idempresa = $request->cbempresa;
  $detalle = $request->tbdetalle;
 $unidad1 = $request->tbunidad1;
 $cantidad1 = $request->tbcantidad1;
 $costo_unitario = $request->tbcosto_unitario;
 $fecha5 = $request->tbfecha5;

      DB::insert('insert into inventario_productos (idempresa, detalle, unidad1, cantidad1, costo_unitario, fecha5) values(?, ?, ?, ?, ?, ?)',[$idempresa, $detalle, $unidad1, $cantidad1, $costo_unitario, $fecha5]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }
public function storecuentas(Request $request)
    {
  $idempresa = $request->cbempresa;
  $descripcion = $request->tbdescripcion;
 $deudor = $request->tbdeudor;
 $monto_total = $request->tbmonto_total;
 $fecha = $request->tbfecha;
 $pagado = $request->tbpagado;
  $fecha_pago = $request->tbfecha_pago;


      DB::insert('insert into cuentas_cobro (idempresa, descripcion, deudor, monto_total, fecha, pagado, fecha_pago) values(?, ?, ?, ?, ?, ?, ?)',[$idempresa, $descripcion, $deudor, $monto_total, $fecha, $pagado, $fecha_pago]);


        switch ($idempresa) {
    case 1:
        return Redirect::to('/uerh');
        break;
    case 2:
       return Redirect::to('/upab');
        break;
    case 3:
       return Redirect::to('/ug23');
        break;
     case 4:
       return Redirect::to('/enauto');
        break;
     case 5:
       return Redirect::to('/fbm');
        break;
        case 6:
       return Redirect::to('/uepi');
        break;
}


    }


    public function fichas()
    {

        return view('empresas/Vfichas');

    }
    public function create()
    {
        $empresas=Mempresas::getempresas("");
        $producto=Mproductos::getproducto();
        $prog_mes_ing=Mprog_mes_ing::getprog_mes_ing();
        $prog_anual_ing=Mprog_anual_ing::getprog_anual_ing();
        $prog_mes_prod=Mprog_mes_prod::getprog_mes_prod();
        $prog_anual_prod=Mprog_anual_prod::getprog_anual_prod();
        $presupuestogastado=Mpresupuestogastado::getpresupuestogastado();
        $ejecucion_gastos=Mejecucion_gastos::getejecucion_gastos();

            return view('empresas/Vfichas')
                        ->with([
                            'empresas'=>$empresas,
                            'producto'=>$producto,
                            'prog_mes_ing'=>$prog_mes_ing,
                            'prog_anual_ing'=>$prog_anual_ing,
                            'prog_mes_prod'=>$prog_mes_prod,
                            'prog_anual_prod'=>$prog_anual_prod,
                            'presupuestogastado'=>$presupuestogastado,
                            'ejecucion_gastos'=>$ejecucion_gastos
                        ]);



}
}
