@extends('principal/Vprincipal')
@section('contenido')
    @section('css')
        <link rel="stylesheet"  href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    @endsection

            <div class="container">
              <hr>
                <h3>UERH</h3>
                <hr>
                <form action="/uerh" method="POST">
                  {{csrf_field()}}
               <legend> PRODUCTOS </legend>
                <div class="mb-3">
                  <label for="tproducto" class="form-label">Producto</label>
                  <input  type="text"  id="tbproducto" name="tbproducto" class="form-control" placeholder="Ingrese producto..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tdescripcion" class="form-label">Descripción</label>
                  <input type="text" id="tbdescripcion" name="tbdescripcion" class="form-control" placeholder="Ingrese descripcion..."requiered>
                </div>
                <div class="mb-3">
                  <label for="tunidad" class="form-label">Unidad</label>
                  <input type="text" id="tbunidad" name="tbunidad" class="form-control" placeholder="Ingrese unidad..."requiered>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
                </div>
            </form>
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
            @foreach($productos as $d)
            <tr>
              <td>{{$d->producto}}</td>
              <td>{{$d->descripcion}}</td>
              <td>{{$d->unidad}}</td>
              <td>

                <a href="/productos/{{$d->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
            <legend> PRODUCCIÓN </legend>
            <h4>Anual</h4> <br>
                  <div class="container">
              <hr>
                <h3>TOTAL PROGRAMADO ANUAL PARA PRODUCCIÓN</h3>
                <hr>
                <form action="/prog_anual_prod" method="POST">
                  {{csrf_field()}}
                <legend>Datos Generales - COFADENA</legend>
                 <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control">
                    <?php
                        foreach($productos as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->producto.'</option>
                        ';}
                    ?>
                </select>
              </div>
                <div class="mb-3">
                  <label for="tprog_anual_prod" class="form-label">Total Programado</label>
                  <input  type="number" step="any" id="tbprog_anual_prod" name="tbprog_anual_prod" class="form-control" placeholder="Ingrese monto programado..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tdanho" class="form-label">Año</label>
                  <input type="number" step="any" id="tbanho" name="tbanho" class="form-control" placeholder="Ingrese año..."requiered>
                </div>

                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
                </div>
            </form>

                <table id="" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
          <thead>
            <tr>
                <th scope="col">PRODUCTO</th>
                <th scope="col">TOTAL PROGRAMADO</th>
                <th scope="col">GESTIÓN</th>

            </tr>
          </thead>
          <tbody>
            @foreach($prog_anual_prod as $pap)
            <tr>
              <td>{{$pap->idproducto}}</td>
              <td>{{$pap->programado}}</td>
              <td>{{$pap->anho}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/proyeccion_ingresos/{{$pap->idprog_anual_prod}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
            <h4>Mensual</h4>
            <a href="/prog_mes_prod">
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
            @foreach($prog_mes_prod as $pmp)
            <tr>
              <td>{{$pmp->idproducto}}</td>
              <td>{{$pmp->programado_mes}}</td>
              <td>{{$pmp->mes}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/prog_mes_prod/{{$pmp->idprog_mes_prod}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

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
            @foreach($ejecutado_prod as $p)
            <tr>
              <td>{{$p->cantidad_ejecutada}}</td>
              <td>{{$p->cumplimiento_porcentaje}}</td>
              <td>{{$p->total_prod_mes}}</td>
              <td>{{$p->porcentaje_cumplimiento}}</td>
              <td>{{$p->porcentaje_uso_anual}}</td>
              <td>{{$p->fecha1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/ejecutado_prod/{{$p->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> INGRESOS </legend>
              <h4>Anual</h4> <br>
              <a href="/prog_anual_ing">
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
            @foreach($prog_anual_ing as $pai)
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
            <a href="/prog_mes_ing">
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
            @foreach($prog_mes_ing as $pmi)
            <tr>
              <td>{{$pmi->idproducto}}</td>
              <td>{{$pmi->programado_mes1}}</td>
              <td>{{$pmi->mes1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/prog_mes_ing/{{$pmi->idprog_mes_ing}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
          <a href="/ingresos">
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
            @foreach($proyeccion_ingresos as $pi)
            <tr>
              <td>{{$pi->cantidad_ejecutada}}</td>
              <td>{{$pi->porcentaje_mes}}</td>
              <td>{{$pi->acumulado_mes}}</td>
              <td>{{$pi->porcentaje_ejecucion_anual}}</td>
              <td>{{$pi->fecha1}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/proyeccion_ingresos/{{$pi->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <legend> PROGRAMACIÓN DE INGRESOS (VOLÚMENES Y VALORES DE VENTA) </legend>
                <a href="/programacion_ingresos">
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
            @foreach($programacion_ingresos as $pri)
            <tr>
              <td>{{$pri->fecha3}}</td>
              <td>{{$pri->cantidad}}</td>
              <td>{{$pri->precio}}</td>
              <td>{{$pri->ingreso_mes}}</td>
              <td>{{$pri->total_anual}}</td>
              <td>{{$pri->porcentaje_ejecucion_anual}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/programacion_ingresos/{{$pri->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> EJECUCIÓN PRESUPUESTARIA DE GASTOS</legend>
              <a href="/ejecucion_gastos">
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
            @foreach($presupuestogastado as $pg)
            <tr>
              <td>{{$pg->grupo}}</td>
              <td>{{$pg->presupuesto_anual}}</td>
              <td>{{$pg->fecha}}</td>
              <td>{{$pg->total_ejecutado}}</td>
              <td>{{$pg->porcentaje_ejecutado}}</td>
              <td>{{$pg->eficacia}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/presupuestogastado/{{$pri->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
         <legend> ESTADO DE RECURSOS Y GASTOS CORRIENTES </legend>
         <a href="/ejecucion_gastos">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
         <!--PANTALLA DE INICIO-->
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
            @foreach($ejecucion_gastos as $eg)
            <tr>
              <td>{{$eg->ejecucion_gastos}}</td>
              <td>{{$eg->fecha4}}</td>
              <td>{{$eg->ganacia_perdida}}</td>
              <td>{{$eg->total_anual}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/ejecucion_gastos/{{$eg->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>

         <legend> INVENTARIO PRODUCTOS TERMINADOS </legend> <!--PANTALLA DE INICIO-->
              <a href="/inventario_productos">
                  <button type="button" class="btn btn-primary font-bold" >Nuevo</button></a>
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
            @foreach($inventario_productos as $ip)
            <tr>
              <td>{{$ip->detalle}}</td>
              <td>{{$ip->unidad1}}</td>
              <td>{{$ip->cantidad1}}</td>
              <td>{{$ip->costo_unitario}}</td>
              <td>{{$ip->costo_total87}}</td>
              <td>
                <!--recordar modificar edit C empresas-->
                <a href="/inventario_productos/{{$ip->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>
          <legend> SEGUIMIENTO DE CUENTAS POR COBRAR POR UNIDAD DE NEGOCIO </legend> <!--PANTALLA DE INICIO-->
              <a href="/cuentas_cobro">
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
            @foreach($cuentas_cobro as $cc)
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
                <a href="/cuentas_cobro/{{$cc->id}}/edit">
                  <button type="button" class="btn btn-primary">Editar</button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
         </table>



</div>
@endsection