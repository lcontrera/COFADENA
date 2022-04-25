@extends('principal/Vprincipal')
@section('contenido')
    @section('css')
        <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    @endsection

            <div class="container">
              <hr>
                <h2>ENAUTO</h2>
                <hr>

                <legend> PRODUCTOS </legend>
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">DESCRIPCION</th>
                <th scope="col">UNIDAD</th>
            </tr>
          </thead>
          <tbody>
            @foreach($productos_enauto as $d)
            <tr>
              <td>{{$d->producto}}</td>
              <td>{{$d->descripcion}}</td>
              <td>{{$d->unidad}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/productos_enauto/{{$d->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
            <legend> PRODUCCIÓN </legend>
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
            @foreach($ejecutado_prod_enauto as $p)
            <tr>
              <td>{{$p->cantidad_ejecutada}}</td>
              <td>{{$p->cumplimiento_porcentaje}}</td>
              <td>{{$p->total_prod_mes}}</td>
              <td>{{$p->porcentaje_cumplimiento}}</td>
              <td>{{$p->porcentaje_uso_anual}}</td>
              <td>{{$p->fecha1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/ejecutado_prod_enauto/{{$p->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <legend> INGRESOS </legend>
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
            @foreach($proyeccion_ingresos_enauto as $pi)
            <tr>
              <td>{{$pi->cantidad_ejecutada}}</td>
              <td>{{$pi->porcentaje_mes}}</td>
              <td>{{$pi->acumulado_mes}}</td>
              <td>{{$pi->porcentaje_ejecucion_anual}}</td>
              <td>{{$pi->fecha1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/proyeccion_ingresos_enauto/{{$pi->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <legend> PROGRAMACIÓN DE INGRESOS (VOLÚMENES Y VALORES DE VENTA) </legend>
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
            @foreach($programacion_ingresos_enauto as $pri)
            <tr>
              <td>{{$pri->fecha3}}</td>
              <td>{{$pri->cantidad}}</td>
              <td>{{$pri->precio}}</td>
              <td>{{$pri->ingreso_mes}}</td>
              <td>{{$pri->total_anual}}</td>
              <td>{{$pri->porcentaje_ejecucion_anual}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/programacion_ingresos_enauto/{{$pri->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> EJECUCIÓN PRESUPUESTARIA DE GASTOS</legend>
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
            @foreach($presupuestogastado_enauto as $pg)
            <tr>
              <td>{{$pg->grupo}}</td>
              <td>{{$pg->presupuesto_anual}}</td>
              <td>{{$pg->fecha}}</td>
              <td>{{$pg->total_ejecutado}}</td>
              <td>{{$pg->porcentaje_ejecutado}}</td>
              <td>{{$pg->eficacia}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/presupuestogastado_enauto/{{$pri->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <legend> ESTADO DE RECURSOS Y GASTOS CORRIENTES </legend> <!--PANTALLA DE INICIO-->
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">DESCRIPCIÓN</th>
                <th scope="col">FECHA</th>
                <th scope="col">GANANCIA PERDIDA</th>
                <th scope="col">TOTAL ANUAL</th>

            </tr>
          </thead>
          <tbody>
            @foreach($ejecucion_gastos_enauto as $eg)
            <tr>
              <td>{{$eg->ejecucion_gastos}}</td>
              <td>{{$eg->fecha4}}</td>
              <td>{{$eg->ganacia_perdida}}</td>
              <td>{{$eg->total_anual}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/ejecucion_gastos_enauto/{{$eg->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> INVENTARIO PRODUCTOS TERMINADOS </legend> <!--PANTALLA DE INICIO-->
                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">DETALLE</th>
                <th scope="col">UNIDAD</th>
                <th scope="col">CANTIDAD</th>
                <th scope="col">COSTO UNITARIO</th>
                <th scope="col">COSTO TOTAL</th>
            </tr>
          </thead>
          <tbody>
            @foreach($inventario_productos_enauto as $ip)
            <tr>
              <td>{{$ip->detalle}}</td>
              <td>{{$ip->unidad1}}</td>
              <td>{{$ip->cantidad1}}</td>
              <td>{{$ip->costo_unitario}}</td>
              <td>{{$ip->costo_total87}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/inventario_productos_enauto/{{$ip->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
          <legend> SEGUIMIENTO DE CUENTAS POR COBRAR POR UNIDAD DE NEGOCIO </legend> <!--PANTALLA DE INICIO-->
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
            @foreach($cuentas_cobro_enauto as $cc)
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
                <a href="/cuentas_cobro_enauto/{{$cc->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>



</div>
@endsection