@extends('principal/Vprincipal')
@section('contenido')
    @section('css')
        <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @endsection

            <div class="container">
                <div class="table-responsive">
              <hr>
                <h3>UGC23M</h3>
                <hr>
                 <legend> EMPRESA </legend>

                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">EMPRESA</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">GERENTE</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">DIRECCIÓN</th>
                <th scope="col">PERSONA DE ENLACE, CARGO</th>
                <th scope="col">AÑO DE CREACIÓN</th>
                <th scope="col">DECRETO O DOCUMENTO DE CREACIÓN</th>
            </tr>
          </thead>
          <tbody>
            @foreach($empresa as $e)
            <tr>
              <td>{{$e->empresa}}</td>
              <td>{{$e->descripcion}}</td>
              <td>{{$e->gerente}}</td>
              <td>{{$e->telefono}}</td>
              <td>{{$e->direccion}}</td>
              <td>{{$e->persona_enlace_cargo}}</td>
              <td>{{$e->anho_creacion}}</td>
              <td>{{$e->dec_supremo_doc_creacion}}</td>
              <td>

                <a href="/uerh/{{$e->idempresa}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>



                   <legend> PRODUCTOS </legend>
                    <a href="fichas#productos1">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="tabla1" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">UNIDAD</th>
            </tr>
          </thead>
          <tbody>
            @foreach($productos as $d)
            <tr>
              <td>{{$d->producto}}</td>
              <td>{{$d->descripcionn}}</td>
              <td>{{$d->empresa}}</td>
              <td>{{$d->unidad}}</td>

              <td>
                <a href="/edit/editprod/{{$d->idproducto}}">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>



         </table>
            <legend> PRODUCCIÓN </legend>
            <h4>Anual</h4> <br>
                 <a href="fichas#productoap">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <div class="container">
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">TOTAL PROGRAMADO</th>
                <th scope="col">GESTIÓN</th>

            </tr>
          </thead>
          <tbody>
            @foreach($prog_anual_prods as $pap)
            <tr>
              <td>{{$pap->producto}}</td>
              <td align="right">{{number_format($pap->programado, 0, ",", ".")}}</td>
              <td align="center">{{$pap->anho}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/edit/proganual/{{$pap->idprog_anual_prod}}">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
            <h4>Mensual</h4>
            <a href="fichas#productomp">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="tabla_productos1" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">TOTAL PROGRAMADO</th>
                <th scope="col">GESTIÓN</th>

            </tr>
          </thead>
          <tbody>
            @foreach($prog_mes_prods as $pmp)
            <tr>
              <td>{{$pmp->producto}}</td>
              <td align="right">{{number_format($pmp->programado_mes, 0, ",", ".")}}</td>
              <td align="center">{{$pmp->mes}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/edit/editprogmensual/{{$pmp->idprog_mes_prod}}">
                  <button type="button" class="btn btn-primary">Editar</button>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <hr>
            <a href="fichas#produccion">
             <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
          <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">CANTIDAD EJECUTADA</th>
                <th scope="col">PROG MENSUAL</th>
                <th scope="col">CUMPLIMINTO MENSUAL (%)</th>
                <th scope="col">PROG ANUAL</th>
                <th scope="col">CUMPLIMIENTO ANUAL (%)</th>
                <th scope="col">MES</th>
                <th scope="col">AÑO</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ejecutado_prods as $p)
            <tr>
              <td>{{$p->producto}}</td>
              <td align="right">{{$p->cantidad}}</td>
              <td align="right">{{number_format($p->programado_mensual, 0, ",", ".")}}</td>
              <td align="right">{{number_format($p->cantidad / $p->programado_mensual * 100, 2)}} %</td>
              <td align="right">{{number_format($p->programado_anual, 0, ",", ".")}}</td>
              <td align="right">{{number_format($p->cantidad / $p->programado_anual * 100, 2)}} %</td>
              <td align="center">{{$p->mes}}</td>
              <td align="center">{{$p->anio}}</td>
              <td>
                 <a href="/empresas/eliminarprod/{{$p->idproducto1}}"onclick="return eliminarRegistro('Eliminar Registro')">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>
              </td>

            </tr>
            @endforeach
          </tbody>
         </table>

         <legend>PROYECCIÓN DE INGRESOS </legend>
              <h4>Anual</h4> <br>
              <a href="fichas#ia">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">TOTAL PROGRAMADO (Bs.)</th>
                <th scope="col">GESTIÓN</th>

            </tr>
          </thead>
          <tbody>
            @foreach($prog_anual_ings as $pai)
            <tr>
              <td>{{$pai->producto}}</td>
              <td align="right">{{number_format($pai->programado1, 2, ",", ".")}}</td>
              <td align="center">{{$pai->anho1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/edit/proganualing/{{$pai->idprog_anual_ing}}">
                  <button type="button" class="btn btn-primary">Editar</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
            <h4>Mensual</h4>
            <a href="fichas#im">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">TOTAL PROGRAMADO (Bs.)</th>
                <th scope="col">MES</th>

            </tr>
          </thead>
          <tbody>
            @foreach($prog_mes_ings as $pmi)
            <tr>
              <td>{{$pmi->producto}}</td>
              <td align="right">{{number_format($pmi->programado_mes1, 2, ",", ".")}}</td>
              <td align="center">{{$pmi->mes1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/edit/editprogmensualing/{{$pmi->idprog_mes_ing}}">
                  <button type="button" class="btn btn-primary">Editar</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <hr>

         <a href="fichas#ingresos">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
               <th scope="col">PRODUCTO</th>
                <th scope="col">CANTIDAD EJECUTADA</th>
                <th scope="col">PROG MENSUAL</th>
                <th scope="col">CUMPLIMIENTO MENSUAL (%)</th>
                <th scope="col">PROG ANUAL</th>
                <th scope="col">CUMPLIMIENTO ANUAL (%)</th>
                <th scope="col">MES</th>
                <th scope="col">AÑO</th>
            </tr>
          </thead>
          <tbody>
            @foreach($proyeccion_ingresoss as $pi)
            <tr>
               <td>{{$pi->producto}}</td>
              <td align="right">{{$pi->cantidading}}</td>
              <td align="right">{{number_format($pi->programado_mensualing, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pi->cantidading / $pi->programado_mensualing * 100, 2)}} %</td>
              <td align="right">{{number_format($pi->programado_anualing, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pi->cantidading / $pi->programado_anualing * 100, 2)}} %</td>
              <td align="center">{{$pi->mes_ing}}</td>
              <td align="center">{{$pi->anio_ing}}</td>


              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/empresas/eliminaring/{{$pi->idproyeccion_ingresos}}"onclick="return eliminarRegistro('Eliminar Registro')">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> PROGRAMACIÓN DE INGRESOS (VOLÚMENES Y VALORES DE VENTA) </legend>
                <a href="/fichas#pi">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO </th>
                <th scope="col">PROGRAMADO ANUAL </th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">PRECIO (Bs)</th>
                <th scope="col">INGRESO MENSUAL</th>
                <th scope="col">CUMPLIMIENTO ANUAL (%) </th>
                <th scope="col">MES </th>
                 <th scope="col">AÑO</th>

            </tr>
          </thead>
          <tbody>
            @foreach($programacion_ingresoss as $pri)
            <tr>
              <td>{{$pri->producto}}</td>
              <td align="right">{{number_format($pri->programado_anualing, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pri->cantidadpi, 0, ",", ".")}}</td>
              <td align="right">{{$pri->preciopi}}</td>
              <td align="right">{{number_format($pri->multi, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pri->multi / $pri->programado_anualing * 100, 2)}} %</td>
              <td align="center">{{$pri->mes_prog}}</td>
              <td align="center">{{$pri->anio_prog}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                 <a href="/empresas/eliminarprog/{{$pri->idprogramacion_ingresos}}"onclick="return eliminarRegistro('Eliminar Registro')">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> EJECUCIÓN PRESUPUESTARIA DE GASTOS</legend>
              <a href="/fichas#epg">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">DESCRIPCIÓN DE GRUPO</th>
                 <th scope="col">ENERO</th>
                 <th scope="col">FEBRERO</th>
                <th scope="col">MARZO</th>
                <th scope="col">1er TRIMESTRE</th>
                <th scope="col">ABRIL</th>
                <th scope="col">MAYO</th>
                <th scope="col">JUNIO</th>
                <th scope="col">2do TRIMESTRE</th>
                <th scope="col">JULIO</th>
                <th scope="col">AGOSTO</th>
                <th scope="col">SEPTIEMBRE</th>
                <th scope="col">3er TRIMESTRE</th>
                <th scope="col">OCTUBRE</th>
                <th scope="col">NOVIEMBRE</th>
                <th scope="col">DICIEMBRE</th>
                <th scope="col">4to TRIMESTRE</th>

            </tr>
          </thead>
          <tbody>
            @foreach($presupuestogastados as $pg)
            <tr>
              <td>{{$pg->grupo}}</td>
              <td align="right">{{number_format($pg->enero, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->febrero, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->marzo, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->pri_tri, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->abril, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->mayo, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->junio, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->seg_tri, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->julio, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->agosto, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->septiembre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->ter_tri, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->octubre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->noviembre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->diciembre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->cua_tri, 0, ",", ".")}}</td>
              <td>
                <!--recordar modificar edit C empresas-->

              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">SUMATORIAS</th>
                 <th scope="col">ENERO</th>
                 <th scope="col">FEBRERO</th>
                <th scope="col">MARZO</th>
                <th scope="col">1er TRIMESTRE</th>
                <th scope="col">ABRIL</th>
                <th scope="col">MAYO</th>
                <th scope="col">JUNIO</th>
                <th scope="col">2do TRIMESTRE</th>
                <th scope="col">JULIO</th>
                <th scope="col">AGOSTO</th>
                <th scope="col">SEPTIEMBRE</th>
                <th scope="col">3er TRIMESTRE</th>
                <th scope="col">OCTUBRE</th>
                <th scope="col">NOVIEMBRE</th>
                <th scope="col">DICIEMBRE</th>
                <th scope="col">4to TRIMESTRE</th>

            </tr>
          </thead>
          <tbody>
            @foreach($presupuestogastad as $pg)
            <tr>
              <td></td>
                           <td align="right">{{number_format($pg->enero, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->febrero, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->marzo, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->pri_tri, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->abril, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->mayo, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->junio, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->seg_tri, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->julio, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->agosto, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->septiembre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->ter_tri, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->octubre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->noviembre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->diciembre, 0, ",", ".")}}</td>
              <td align="right">{{number_format($pg->cua_tri, 0, ",", ".")}}</td>
                            <td>

              </td>
            </tr>
            @endforeach
          </tbody>
         </table>


         <legend> ESTADO DE RECURSOS Y GASTOS CORRIENTES </legend>
         <a href="/fichas#ergc">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
         <!--PANTALLA DE INICIO-->
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">MESES</th>
                <th scope="col">RECURSOS CORRIENTES</th>
                <th scope="col">GASTOS CORRIENTES</th>
                <th scope="col">GANANCIA PERDIDA</th>
                <th scope="col">TOTAL ANUAL</th>
                <th scope="col">AÑO</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ejecucion_gastoss as $eg)
            <tr>
              <td>{{$eg->mes}}</td>
              <td>{{$eg->recursos_corrientes}}</td>
              <td>{{$eg->gastos_corrientes}}</td>
              <td>{{$eg->ganancia}}</td>
              <td>{{$eg->total_anual}}</td>
              <td>{{$eg->anio}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/empresas/eliminareg/{{$eg->idejecuciongastos}}"onclick="return eliminarRegistro('Eliminar Registro')">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> INVENTARIO PRODUCTOS TERMINADOS </legend> <!--PANTALLA DE INICIO-->
              <a href="fichas#ipt">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">DETALLE</th>
                <th scope="col">UNIDAD</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">COSTO UNITARIO</th>
                <th scope="col">COSTO UNITARIO (100%)</th>
                <th scope="col">COSTO TOTAL (87%)</th>
                <th scope="col">FECHA</th>
            </tr>
          </thead>
          <tbody>
            @foreach($inventario_productoss as $ip)
            <tr>
              <td>{{$ip->detalle}}</td>
              <td>{{$ip->unidad1}}</td>
              <td align="right">{{number_format($ip->cantidad1, 2, ",", ".")}}</td>
              <td align="right">{{number_format($ip->costo_unitario, 2, ",", ".")}}</td>
              <td align="right">{{number_format($ip->costo_unitario * $ip->cantidad1, 2, ",", ".")}}%</td>
              <td align="right">{{number_format($ip->costo_unitario * $ip->cantidad1 * 0.87, 2, ",", ".")}}%</td>
              <td align="center">{{$ip->fecha5}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
               <a href="/empresas/eliminarinv/{{$ip->idinvetarios}}"onclick="return eliminarRegistro('Eliminar Registro')">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
          <legend> SEGUIMIENTO DE CUENTAS POR COBRAR POR UNIDAD DE NEGOCIO </legend> <!--PANTALLA DE INICIO-->
              <a href="fichas#sccun">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">DEUDOR</th>
                <th scope="col">MONTO TOTAL</th>
                <th scope="col">FECHA</th>
                <th scope="col">PAGADO</th>
                <th scope="col">FECHA DE PAGO</th>
                <th scope="col">SALDO DE DEUDA</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cuentas_cobros as $cc)
            <tr>
              <td>{{$cc->descripcion}}</td>
              <td>{{$cc->deudor}}</td>
              <td align="right">{{number_format($cc->monto_total, 0, ",", ".")}}</td>
              <td>{{$cc->fecha}}</td>
              <td align="right">{{number_format($cc->pagado, 0, ",", ".")}}</td>
              <td align="center">{{$cc->fecha_pago}}</td>
              <td align="right">{{number_format($cc->monto_total-$cc->pagado, 0, ",", ".")}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
               <a href="/empresas/eliminarseg/{{$cc->idcuentas}}"onclick="return eliminarRegistro('Eliminar Registro')">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>

              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

        <script>
            function eliminarRegistro(value) {
                action = confirm(value) ? true : event.preventDefault()
            }
        </script>

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script>
    <!-- Momentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script>
        $(function() {
            $("#start_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
            $("#end_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
        });
        // Fetch records
        function fetch(start_date, end_date) {
            $.ajax({

                type: "GEt",
                data: {
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    // Datatables
                    var i = 1;
                    $('#produccion').DataTable({
                        "data": data.produccion,
                        // buttons
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        // responsive
                        "responsive": true,
                        "columns": [{
                                "data": "producto",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "cantidad"
                            },
                            {
                                "data": "programado_anual",
                                "render": function(data, type, row, meta) {
                                    return `${row.programado_anual}th Standard`;
                                }
                            },
                            {
                                "data": "programado_mensual",
                                "render": function(data, type, row, meta) {
                                    return `${row.programado_mensual}%`;
                                }
                            },
                            {
                                "data": "result"
                            },
                            {
                                "data": "created_at",
                                "render": function(data, type, row, meta) {
                                    return moment(row.created_at).format('DD-MM-YYYY');
                                }
                            }
                        ]
                    });
                }
            });
        }
        fetch();
        // Filter
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Both date required");
            } else {
                $('#records').DataTable().destroy();
                fetch(start_date, end_date);
            }
        });
        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#start_date").val(''); // empty value
            $("#end_date").val('');
            $('#records').DataTable().destroy();
            fetch();
        });
    </script>
</div>
</div>

@endsection