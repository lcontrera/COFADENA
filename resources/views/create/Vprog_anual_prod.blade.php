@extends('principal/Vprincipal')
@section('contenido')
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
@endsection
