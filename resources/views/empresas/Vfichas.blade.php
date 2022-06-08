@extends('principal/Vprincipal')
@section('contenido')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <div class="container">
              <hr>
                <h3>FICHAS TECNICAS</h3>
                <hr>

                <form action="/storeEmpresa" enctype="multipart/form-data" method="POST">
                	<fieldset disabled>
                  {{csrf_field()}}
					      <legend>Datos Generales de la Empresa - COFADENA</legend>
						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">EMPRESAS</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
						    <div class="mb-3">
						      <label for="tdescripcion" class="form-label">Descripción</label>
						      <input type="text" id="descripcion" name="tbdescripcion" class="form-control" placeholder="Ingrese descripcion...">
						    </div>
						    <div class="mb-3">
						      <label for="tgerente" class="form-label">Gerente</label>
						      <input type="text" id="tbgerente" name="tbgerente" class="form-control" placeholder="Ingrese gerente...">
						    </div>
						    <div class="mb-3">
						      <label for="ttelefono" class="form-label">Teléfono</label>
						      <input type="number" id="tbetelfono" name="tbtelefono" class="form-control" placeholder="Telefono...">
						    </div>
						    <div class="mb-3">
						      <label for="tdireccion" class="form-label">Dirección</label>
						      <input type="text" id="tbdireccion" name="tbdireccion" class="form-control" placeholder="Dirección...">
						    </div>
						    <div class="mb-3">
						      <label for="tpersona" class="form-label">Persona de enlace y cargo</label>
						      <input type="text" id="tbpersona" name="tbpersona" class="form-control" placeholder="Dirección...">
						    </div>
						    <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </fieldset>
            </form>


				<hr id="productos1">
					<hr>
					<hr>
					<hr>
                <h3>PRODUCTOS</h3>
                <hr>
                <form action="/storeProductos" enctype="multipart/form-data" method="POST">

                  {{csrf_field()}}
                  <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">EMPRESAS</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
 					<div class="mb-3">
                  <label for="tproducto" class="form-label">Producto nuevo</label>
                  <input type="text" id="tbproducto" name="tbproducto" class="form-control" placeholder="Ingrese producto nuevo..."requiered>
              		  </div>

                <div class="mb-3">
                  <label for="tdescripcionn" class="form-label">Descripción</label>
                  <input type="text" id="tbdescripcionn" name="tbdescripcionn" class="form-control" placeholder="Ingrese descripcion..."requiered>
                </div>
                <div class="mb-3">
                  <label for="tunidad" class="form-label">Unidad</label>
                  <input type="text" id="tbunidad" name="tbunidad" class="form-control" placeholder="Ingrese unidad..."requiered>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
                </div>
            </form>
            <hr id="productoap">
            <hr>
            <hr>
            <hr>
                <h3>TOTAL PROGRAMADO ANUAL PARA PRODUCCIÓN</h3>
                <hr>
    				<form action="/storeprog_anual_prod" enctype="multipart/form-data" method="POST">
                  {{csrf_field()}}

                  <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">EMPRESAS</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>

                 <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control form-select form-select-lg mb-3">
                    <?php
                        foreach($producto as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->idproducto.'-'.$c->producto.'</option>
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

            </form>
            	<hr id="productomp">
            <hr id="productomp">
            <hr>
            <hr>

                <h3>TOTAL PROGRAMADO MENSUAL PARA PRODUCCIÓN</h3>
                <hr>
                <form action="/storeprog_mensual_prod" method="POST">
                  {{csrf_field()}}
                  <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">EMPRESAS</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
                 <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control form-select form-select-lg mb-3">
                    <?php
                        foreach($producto as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->idproducto.'-'.$c->producto.'</option>
                        ';}
                    ?>
                </select>
              </div>
                <div class="mb-3">
                  <label for="tprog_mes_prod" class="form-label">Programado Mensual</label>
                  <input  type="number" step="any" id="tbprog_mes_prod" name="tbprog_mes_prod" class="form-control" placeholder="Ingrese mensual programado..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tdmes" class="form-label">Mes</label>
                  <input type="month" step="any" id="tbmes" name="tbmes" class="form-control" placeholder="Ingrese mes..."requiered>
                </div>

                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>

            </form>

            <hr id="produccion">
            <hr>
            <hr>
                <h3>PRODUCCIÓN</h3>
                <hr>
                <form action="/storeproduccion" method="POST">
                  {{csrf_field()}}

                                    <div class="mb-3">
						      <!-- EMPRESA  -->

				                <label for="tbempresa" class="form-label">EMPRESAS</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
                  <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control form-select form-select-lg mb-3">
                    <?php
                        foreach($producto as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->idproducto.'-'.$c->producto.'</option>
                        ';}
                    ?>
                </select>
            </div>
                <div class="row g-2">
						  <div class="col-md">
						    <div class="form-floating">
						      <select id="tbprog_mensual_prod" name="cbprog_mensual_prod" class="form-select" aria-label="Floating label select example">
						         <?php
				                        foreach($prog_mes_prod as $c){
				                            echo '
				                            <option value="'.$c->idprog_mes_prod.'">'.$c->programado_mes.' - ('.$c->mes.') - '.$c->idproducto.'</option>
				                        ';}
				                    ?>
				                </select>
						      <label for="floatingSelectGrid">Programado mensual existentes</label>
						    </div>
						  </div>
						  <div class="col-md">
						    <div class="form-floating">
						      <select id="tbprog_anual_prod" name="cbprog_anual_prod" class="form-select" aria-label="Floating label select example">
						         <?php
				                        foreach($prog_anual_prod as $c){
				                            echo '
				                            <option value="'.$c->idprog_anual_prod.'">'.$c->programado.' - ('.$c->anho.') - '.$c->idproducto.'</option>
				                        ';}
				                    ?>
				                </select>
						      <label for="floatingSelectGrid">Programado anual</label>
						    </div>
						  </div>

              </div>

            <div class="mb-3">
                  <label for="tcantidad_ejecutada" class="form-label">Cantidad ejecutada</label>
                  <input  type="number" step="any" id="tbcantidad_ejecutada" name="tbcantidad_ejecutada" class="form-control" placeholder="Ingrese cantidad ejecutada..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tfecha1" class="form-label">Fecha</label>
                  <input type="date" id="tbfecha1" name="tbfecha1" class="form-control" placeholder="Ingrese..."requiered>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>

            </form>
            	<hr id="ia">
            	<hr>
                 <hr>
                <h3>TOTAL PROGRAMADO ANUAL PARA INGRESOS</h3>
                <hr>
    				<form action="/storeprog_anual_ing" enctype="multipart/form-data" method="POST">
                  {{csrf_field()}}
                          <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">EMPRESAS</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
                 <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control form-select form-select-lg mb-3">
                    <?php
                        foreach($producto as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->idproducto.'-'.$c->producto.'</option>
                        ';}
                    ?>
                </select>
              </div>
                <div class="mb-3">
                  <label for="tprog_anual_ing" class="form-label">Total Programado</label>
                  <input  type="money"  id="tbprog_anual_ing" name="tbprog_anual_ing" class="form-control" placeholder="Ingrese monto programado..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tdanho" class="form-label">Año</label>
                  <input type="number" step="any" id="tbanho" name="tbanho" class="form-control" placeholder="Ingrese año..."requiered>
                </div>

                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>

            </form>
            <hr id="im">
            <hr>
            	<hr>
                <h3>TOTAL PROGRAMADO MENSUAL PARA INGRESOS</h3>
                <hr>
                <form action="/storeprog_mensual_ing" method="POST">
                  {{csrf_field()}}

                                    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">EMPRESAS</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
                 <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control form-select form-select-lg mb-3">
                    <?php
                        foreach($producto as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->idproducto.'-'.$c->producto.'</option>
                        ';}
                    ?>
                </select>
              </div>
                <div class="mb-3">
                  <label for="tprog_mensual_ing" class="form-label">Programado Mensual</label>
                  <input  type="money" step="any" id="tbprog_mensual_ing" name="tbprog_mensual_ing" class="form-control" placeholder="Ingrese monto programado..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tdmes" class="form-label">Mes</label>
                  <input type="month" step="any" id="tbmes" name="tbmes" class="form-control" placeholder="Ingrese mes..."requiered>
                </div>

                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>

            </form>
            	<hr id="ingresos">
                <hr>
                <h3>PROYECCIÓN DE INGRESOS</h3>
                <hr>
                <form action="/storeingresos" method="POST">
                  {{csrf_field()}}
                  <div class="mb-3">
                  				           <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
                  <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control form-select form-select-lg mb-3">
                    <?php
                        foreach($producto as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->idproducto.'-'.$c->producto.'</option>
                        ';}
                    ?>
                </select>
              </div>
              <div class="row g-2">
						  <div class="col-md">
						    <div class="form-floating">
						      <select id="tbprog_mensual_ing" name="cbprog_mensual_ing" class="form-select" aria-label="Floating label select example">
						         <?php
				                        foreach($prog_mes_ing as $c){
				                            echo '
				                            <option value="'.$c->idprog_mes_ing.'">'.$c->programado_mes1.'-('.$c->mes1.')-'.$c->idproducto.'</option>
				                        ';}
				                    ?>
				                </select>
						      <label for="floatingSelectGrid">Programado mensual existentes</label>
						    </div>
						  </div>
						  <div class="col-md">
						    <div class="form-floating">
						      <select id="tbprog_anual_ing" name="cbprog_anual_ing" class="form-select" aria-label="Floating label select example">
						         <?php
				                        foreach($prog_anual_ing as $c){
				                            echo '
				                            <option value="'.$c->idprog_anual_ing.'">'.$c->programado1.'- ('.$c->anho1.')-'.$c->idproducto.' </option>
				                        ';}
				                    ?>
				                </select>
						      <label for="floatingSelectGrid">Programado anual existentes</label>
						    </div>
						  </div>
						</div>
            <div class="mb-3">
                  <label for="tcantidad_ejecutada" class="form-label">Cantidad ejecutada</label>
                  <input  type="number" step="any" id="tbcantidad_ejecutada" name="tbcantidad_ejecutada" class="form-control" placeholder="Ingrese cantidad ejecutada..."requiered >
                </div>

                <div class="mb-3">
                  <label for="tfecha1" class="form-label">Fecha</label>
                  <input type="date" id="tbfecha1" name="tbfecha1" class="form-control" placeholder="Ingrese..."requiered>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>

            </form>
            	<hr id="pi">
            	 <hr>
                <h3>PROGRAMACIÓN INGRESOS</h3>
                <hr>
                <form action="/storeprog_ingresos" method="POST">
                  {{csrf_field()}}
                  <div class="mb-3">
                  		<select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
                  <div class="mb-3">
                <!-- PRODUCTO  -->
                <label for="tbproducto" class="form-label">Producto</label>
                <select id="tbproducto" name="cbproducto"  class="form-control form-select form-select-lg mb-3">
                    <?php
                        foreach($producto as $c){
                            echo '
                            <option value="'.$c->idproducto.'">'.$c->idproducto.'-'.$c->producto.'</option>
                        ';}
                    ?>
                </select>
              </div>
						  <div class="col-md">
						    <div class="form-floating">
						      <select id="tbprog_anual_ing" name="cbprog_anual_ing" class="form-select" aria-label="Floating label select example">
						         <?php
				                        foreach($prog_anual_ing as $c){
				                            echo '
				                            <option value="'.$c->idprog_anual_ing.'">'.$c->programado1.'-('.$c->anho1.')-('.$c->idproducto.')</option>
				                        ';}
				                    ?>
				                </select>
						      <label for="floatingSelectGrid">Programado anual</label>
						    </div>
						  </div>

            <div class="mb-3">
                  <label for="tcantidad" class="form-label">Cantidad</label>
                  <input  type="number" step="any" id="tbcantidad" name="tbcantidad" class="form-control" placeholder="Ingrese cantidad ..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tdprecio" class="form-label">Precio (Bs)</label>
                  <input type="money" step="any" id="tbprecio" name="tbcumplimiento_porcentaje" class="form-control" placeholder="Ingrese precio..."requiered>
                </div>
                <div class="mb-3">
                  <label for="tfecha3" class="form-label">Fecha</label>
                  <input type="date" id="tbfecha3" name="tbfecha3" class="form-control" placeholder="Ingrese..."requiered>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>

            </form>
            <hr id="epg">
            <hr>
            <hr>
                <h3>EJECUCIÓN PRESUPUESTARIA DE GASTOS</h3>
                <hr>
            <form action="/storepresupuestogastado" enctype="multipart/form-data" method="POST">

                  {{csrf_field()}}

						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">Empresa</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
						    <div class="mb-3">
						      <label for="tbgrupo" class="form-label">Descripción de grupo</label>
						      <select id="tbgrupo" name="cbgrupo"  class="form-control form-select form-select-lg mb-3">
				                <option value="SERVICIOS PERSONALES">SERVICIOS PERSONALES</option>
				                <option value="SERVICIOS NO PERSONALES">SERVICIOS NO PERSONALES</option>
				                <option value="MATERIALES Y SUMINISTROS">MATERIALES Y SUMINISTROS</option>
				                <option value="ACTIVOS REALES">ACTIVOS REALES</option>
				                <option value="ACTIVOS FINANCIEROS">ACTIVOS FINANCIEROS</option>
				                <option value="SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION">SERVICIO DE LA DEUDA PUBLICA Y DISMINUCION</option>
				                <option value="IMPUESTOS, REGALIAS Y TASAS">IMPUESTOS, REGALIAS Y TASAS</option>
				                </select>
						    </div>
						     <div class="mb-3">
						      <label for="tpresupuesto" class="form-label">Presupuesto anual (Bs)</label>
						      <input type="money" id="tbpresupuesto" name="tbpresupuesto" class="form-control" placeholder="Ingrese presupuesto...">
						    </div>
						    <div class="mb-3">
						      <label for="tganacia_mensual" class="form-label">Gastos Mensual (Bs)</label>
						      <input type="money" id="tbganacia_mensual" name="tbganacia_mensual" class="form-control" placeholder="Monto...">
						    </div>
						    <div class="mb-3">
						      <label for="tfecha" class="form-label">Fecha</label>
						      <input type="month" id="tbfecha" name="tbfecha" class="form-control" placeholder="Ingrese fecha...">
						    </div>
						    <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>
            <hr id="ergc">
            <hr>
            <hr>
                <h3>ESTADO DE RECURSOS Y GASTOS CORRIENTES</h3>
                <hr>
            <form action="/storeejecucion_gastos" enctype="multipart/form-data" method="POST">

                  {{csrf_field()}}

						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">Empresa</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
						    <div class="mb-3">
						      <label for="tbmes" class="form-label">MESES</label>
				                <select id="tbmes" name="cbmes"  class="form-control form-select form-select-lg mb-3">
				                    <option value="ENERO" >ENERO</option>
				                    <option value="FEBRERO" >FEBRERO</option>
				                    <option value="MARZO" >MARZO</option>
				                    <option value="ABRIL" >ABRIL</option>
				                    <option value="MAYO" >MAYO</option>
				                    <option value="JUNIO" >JUNIO</option>
				                    <option value="JULIO" >JULIO</option>
				                    <option value="AGOSTO" >AGOSTO</option>
				                    <option value="SEPTIEMBRE" >SEPTIEMBRE</option>
				                    <option value="OCTUBRE" >OCTUBRE</option>
				                    <option value="NOVIEMBRE" >NOVIEMBRE</option>
				                    <option value="DICIEMBRE" >DICIEMBRE</option>
				                </select>
						    </div>
						     <div class="mb-3">
						      <label for="trecursos_corrientes" class="form-label">Recursos corrientes</label>
						      <input type="money" id="tbrecursos_corrientes" name="tbrecursos_corrientes" class="form-control" placeholder="Ingrese monto...">
						    </div>
						    <div class="mb-3">
						      <label for="tgastos_corrientes" class="form-label">Gastos corrientes</label>
						      <input type="money" id="tbgastos_corrientes" name="tbgastos_corrientes" class="form-control" placeholder="Ingrese monto...">
						    </div>
						    <div class="mb-3">
						      <label for="tfecha4" class="form-label">Fecha</label>
						      <input type="date" id="tbfecha4" name="tbfecha4" class="form-control" placeholder="Ingrese fecha...">
						    </div>

						    <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>
            	<hr id="ipt">
            	<hr>
                 <hr>
                <h3>INVENTARIO PRODUCTOS TERMINADOS</h3>
                <hr>
            <form action="/storeinventarios" enctype="multipart/form-data" method="POST">

                  {{csrf_field()}}

						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">Empresa</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
						     <div class="mb-3">
						      <label for="tdetalle" class="form-label">Detalle </label>
						      <input type="money" id="tbdetalle" name="tbdetalle" class="form-control" placeholder="Ingrese producto...">
						    </div>
						     <div class="mb-3">
						      <label for="tunidad" class="form-label">Unidad</label>
						      <input type="text" id="tbunidad1" name="tbunidad1" class="form-control" placeholder="Ingrese unidad...">
						    </div>
						     <div class="mb-3">
						      <label for="tcantidad1" class="form-label">Cantidad</label>
						      <input type="text" id="tbcantidad1" name="tbcantidad1" class="form-control" placeholder="Ingrese cantidad...">
						    </div>
						     <div class="mb-3">
						      <label for="tcosto_unitario" class="form-label">Costo unitario (Bs)</label>
						      <input type="text" id="tbcosto_unitario" name="tbcosto_unitario" class="form-control" placeholder="Ingrese costo...">
						    </div>
						    <div class="mb-3">
						      <label for="tfecha5" class="form-label">Fecha</label>
						      <input type="month" id="tbfecha5" name="tbfecha5" class="form-control" placeholder="Ingrese fecha...">
						    </div>
						    <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>
            	<hr id="sccun">
            	<hr>
                 <hr>
                <h3>SEGUIMIENTO DE CUENTAS POR COBRAR POR UNIDAD DE NEGOCIO</h3>
                <hr>
            <form action="/storecuentas" enctype="multipart/form-data" method="POST">

                  {{csrf_field()}}

						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">Empresa</label>
				                <select id="tbempresa" name="cbempresa"  class="form-control form-select form-select-lg mb-3">
				                    <?php
				                        foreach($empresas as $c){
				                            echo '
				                            <option value="'.$c->idempresa.'">'.$c->empresa.'</option>
				                        ';}
				                    ?>
				                </select>
						    </div>
						     <div class="mb-3">
						      <label for="tdescripcion" class="form-label">Descripción </label>
						      <input type="text" id="tbdescripcion" name="tbdescripcion" class="form-control" placeholder="Ingrese descripcion...">
						    </div>
						     <div class="mb-3">
						      <label for="tdeudor" class="form-label">Deudor</label>
						      <input type="text" id="tbdeudor" name="tbdeudor" class="form-control" placeholder="Ingrese deudor...">
						    </div>
						     <div class="mb-3">
						      <label for="tmonto_total" class="form-label">Monto de deuda total</label>
						      <input type="money" id="tbmonto_total" name="tbmonto_total" class="form-control" placeholder="Ingrese monto...">
						    </div>
						    <div class="mb-3">
						     <label for="tfecha" class="form-label">Fecha</label>
						      <input type="date" id="tbfecha" name="tbfecha" class="form-control" placeholder="Ingrese fecha...">
						    </div>
						     <div class="mb-3">
						      <label for="tpagado" class="form-label">Pagado (Bs)</label>
						      <input type="money" id="tbpagado" name="tbpagado" class="form-control" placeholder="Ingrese pago...">
						    </div>
						    <div class="mb-3">
						      <label for="tfecha_pago" class="form-label">Fecha de Pago</label>
						      <input type="date" id="tbfecha_pago" name="tbfecha_pago" class="form-control" placeholder="Ingrese fecha de pago...">
						    </div>
						    <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>

        </div>
@endsection
