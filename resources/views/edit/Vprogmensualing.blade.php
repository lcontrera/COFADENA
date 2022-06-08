@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
              <hr>
                <h3>PROGRAMACIÓN MENSUAL INGRESOS</h3>
                <hr>

                <form action="/edit/editprogmensualing/<?php echo $prog_mensual_ingg->idprog_mes_ing;?>" method="POST">
                  {{csrf_field()}}
                  		<input type="hidden" name="_method" value="PUT">
					      <legend>Datos Generales de la Empresa - COFADENA</legend>
						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tprogmensual" class="form-label">Programado mensual</label>
				                <input type="text" id="tbprogmensual" name="tbprogmensual" class="form-control" value="<?php echo $prog_mensual_ingg->programado_mes1;?>" required>

						    </div>
						    <div class="mb-3">
						      <label for="tmes" class="form-label">Mes</label>
						      <input type="text" id="tbmes" name="tbmes" class="form-control" value="<?php echo $prog_mensual_ingg->mes1;?>">
						    </div>

						    <input type="submit" value="Actualizar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>

        </div>
@endsection
