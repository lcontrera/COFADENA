@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
              <hr>
                <h3>PROGRAMACIÓN ANUAL PRODUCCIÓN</h3>
                <hr>

                <form action="/edit/proganual/<?php echo $prog_anual_prodd->idprog_anual_prod;?>" method="POST">
                  {{csrf_field()}}
                  		<input type="hidden" name="_method" value="PUT">
					      <legend>Datos Generales de la Empresa - COFADENA</legend>
						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbprogramado" class="form-label">Programado</label>
				                <input type="text" id="tbprogramado" name="tbprogramado" class="form-control" value="<?php echo $prog_anual_prodd->programado;?>" required>

						    </div>
						    <div class="mb-3">
						      <label for="tdanho" class="form-label">AÑO</label>
						      <input type="text" id="tbanho" name="tbanho" class="form-control" value="<?php echo $prog_anual_prodd->anho;?>">
						    </div>

						    <input type="submit" value="Actualizar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>

        </div>
@endsection
