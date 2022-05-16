@extends('principal/Vprincipal')
@section('contenido')
    @section('css')
        <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    @endsection

            <div class="container">
              <hr>
                <h3>ENAUTO</h3>
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
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">UNIDAD</th>
            </tr>
          </thead>
          <tbody>
            @foreach($productos as $d)
            <tr>
              <td>{{$d->producto}}</td>
              <td>{{$d->descripcion}}</td>
              <td>{{$d->unidad}}</td>
              <td>
                <a href="/uerhpro/{{$d->idproducto}}/">
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
              <td>{{$pap->idproducto}}</td>
              <td>{{$pap->programado}}</td>
              <td>{{$pap->anho}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/uerhpro/{{$pap->idprog_anual_prod}}/">
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
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
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
              <td>{{$pmp->idproducto}}</td>
              <td>{{$pmp->programado_mes}}</td>
              <td>{{$pmp->mes}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/uerhpro/{{$pmp->idprog_mes_prod}}/">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <a href="fichas#produccion">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
          <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">CANTIDAD EJECUTADA</th>
                <th scope="col">CUMPLIMIENTO MENSUAL (%)</th>
                <th scope="col">TOTAL PRODUCIDO MES</th>
                <th scope="col">CUMPLIMIENTO (%) </th>
                <th scope="col">CUMPLIMIENTO ANUAL (%) </th>
                <th scope="col">FECHA</th>

            </tr>
          </thead>
          <tbody>
            @foreach($ejecutado_prods as $p)
            <tr>
              <td>{{$p->cantidad_ejecutada}}</td>
              <td>{{$p->cumplimiento_porcentaje}}</td>
              <td>{{$p->total_prod_mes}}</td>
              <td>{{$p->porcentaje_cumplimiento}}</td>
              <td>{{$p->porcentaje_uso_anual}}</td>
              <td>{{$p->fecha1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/eliminar/{{$p->idejecutado_prods}}">
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
                <th scope="col">TOTAL PROGRAMADO</th>
                <th scope="col">GESTIÓN</th>

            </tr>
          </thead>
          <tbody>
            @foreach($prog_anual_ings as $pai)
            <tr>
              <td>{{$pai->idproducto}}</td>
              <td>{{$pai->programado1}}</td>
              <td>{{$pai->anho1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/proyeccion_ingresos/{{$pai->idprog_anual_ing}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
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
                <th scope="col">TOTAL PROGRAMADO</th>
                <th scope="col">GESTIÓN</th>

            </tr>
          </thead>
          <tbody>
            @foreach($prog_mes_ings as $pmi)
            <tr>
              <td>{{$pmi->idproducto}}</td>
              <td>{{$pmi->programado_mes1}}</td>
              <td>{{$pmi->mes1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
               <a href="/uerhpro/{{$pmi->idprog_mes_ing}}/">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
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
                <th scope="col">EJECUTADO MENSUAL</th>
                <th scope="col">EJECUTADO MENSUAL (%)</th>
                <th scope="col">ACUMULADO A MES</th>
                <th scope="col">EJECUCION ANUAL (%) </th>
                <th scope="col">FECHA </th>
            </tr>
          </thead>
          <tbody>
            @foreach($proyeccion_ingresoss as $pi)
            <tr>
              <td>{{$pi->cantidad_ejecutada}}</td>
              <td>{{$pi->porcentaje_mes}}</td>
              <td>{{$pi->acumulado_mes}}</td>
              <td>{{$pi->porcentaje_ejecucion_anual}}</td>
              <td>{{$pi->fecha1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/eliminar/{{$pi->idproyeccion_ingresos}}">
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
                <th scope="col">FECHA </th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">PRECIO (Bs)</th>
                <th scope="col">INGRESO MENSUAL</th>
                <th scope="col">TOTAL ANUAL</th>
                <th scope="col">CUMPLIMIENTO ANUAL (%) </th>

            </tr>
          </thead>
          <tbody>
            @foreach($programacion_ingresoss as $pri)
            <tr>
              <td>{{$pri->fecha3}}</td>
              <td>{{$pri->cantidad}}</td>
              <td>{{$pri->precio}}</td>
              <td>{{$pri->ingreso_mes}}</td>
              <td>{{$pri->total_anual}}</td>
              <td>{{$pri->porcentaje_ejecucion_anual}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/eliminar/{{$d->idprogramacion_ingresos}}">
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
                <th scope="col">PRESUPUESTO ANUAL</th>
                <th scope="col">FECHA</th>
                <th scope="col">TOTAL EJECUTADO</th>
                <th scope="col">TOTAL EJECUTADO (%)</th>
                <th scope="col">EFICACIA </th>

            </tr>
          </thead>
          <tbody>
            @foreach($presupuestogastados as $pg)
            <tr>
              <td>{{$pg->grupo}}</td>
              <td>{{$pg->presupuesto_anual}}</td>
              <td>{{$pg->fecha}}</td>
              <td>{{$pg->total_ejecutado}}</td>
              <td>{{$pg->porcentaje_ejecutado}}</td>
              <td>{{$pg->eficacia}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/eliminar/{{$pg->idpresupuestogastado}}">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>
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
                <th scope="col">DESCRIPCIÓN</th>
                <th scope="col">GANANCIA MENSUAL</th>
                <th scope="col">FECHA</th>
                <th scope="col">GANANCIA PERDIDA</th>
                <th scope="col">TOTAL ANUAL</th>

            </tr>
          </thead>
          <tbody>
            @foreach($ejecucion_gastoss as $eg)
            <tr>
              <td>{{$eg->ejecucion_gastos}}</td>
              <td>{{$eg->ganancia_mensual}}</td>
              <td>{{$eg->fecha4}}</td>
              <td>{{$eg->ganacia_perdida}}</td>
              <td>{{$eg->total_anual}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/eliminar/{{$eg->idejecucion_gastos}}">
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
                <th scope="col">COSTO TOTAL</th>
                <th scope="col">FECHA</th>
            </tr>
          </thead>
          <tbody>
            @foreach($inventario_productoss as $ip)
            <tr>
              <td>{{$ip->detalle}}</td>
              <td>{{$ip->unidad1}}</td>
              <td>{{$ip->cantidad1}}</td>
              <td>{{$ip->costo_unitario}}</td>
              <td>{{$ip->costo_total87}}</td>
              <td>{{$ip->fecha5}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
               <a href="/eliminar/{{$ip->idinventario_productos}}">
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
              <td>{{$cc->monto_total}}</td>
              <td>{{$cc->fecha}}</td>
              <td>{{$cc->pagado}}</td>
              <td>{{$cc->fecha_pago}}</td>
              <td>{{$cc->saldo_deuda}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/eliminar/{{$cc->idcuentas_cobro}}">
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>



</div>
@endsection