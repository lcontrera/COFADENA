@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
              <hr>
                <h3>PRODUCCIÓN</h3>
                <hr>
                <form action="/produccion" method="POST">
                  {{csrf_field()}}
                <legend>Datos Generales - COFADENA</legend>
                <div class="mb-3">
                  <label for="tcantidad_ejecutada" class="form-label">Cantidad ejecutada</label>
                  <input  type="number" step="any" id="tbcantidad_ejecutada" name="tbcantidad_ejecutada" class="form-control" placeholder="Ingrese cantidad ejecutada..."requiered >
                </div>
                <div class="mb-3">
                  <label for="tdcumplimiento_porcentaje" class="form-label">Cumplimiento (%)</label>
                  <input type="number" step="any" id="tbcumplimiento_porcentaje" name="tbcumplimiento_porcentaje" class="form-control" placeholder="Ingrese cumplimiento..."requiered>
                </div>
                <div class="mb-3">
                  <label for="ttotal_prod_mes" class="form-label">Total de producción mensual</label>
                  <input type="text" step="any" id="tbtotal_prod_mes" name="tbtotal_prod_mes" class="form-control" placeholder="Ingrese..."requiered>
                </div>

                <div class="mb-3">
                  <label for="tporcentaje_cumplimiento" class="form-label">Cumplimiento (%)</label>
                  <input type="text" step="any" id="tbporcentaje_cumplimiento" name="tbporcentaje_cumplimiento" class="form-control" placeholder="Ingrese..."requiered>
                </div>

                <div class="mb-3">
                  <label for="tporcentaje_uso_anual" class="form-label">Cumplimiento anual (%)</label>
                  <input type="number" step="any" id="tbporcentaje_uso_anual" name="tbporcentaje_uso_anual" class="form-control" placeholder="Ingrese..."requiered>
                </div>

                <div class="mb-3">
                  <label for="tfecha1" class="form-label">Fecha</label>
                  <input type="date" id="tbfecha1" name="tbfecha1" class="form-control" placeholder="Ingrese..."requiered>
                </div>
                <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
                </div>
            </form>
@endsection
