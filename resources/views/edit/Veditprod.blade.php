@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
              <hr>
                <h3>PRODUCTOS</h3>
                <hr>

                <form action="/edit/editprod/<?php echo $productos1->idproducto;?>" method="POST">
                  {{csrf_field()}}
                  		<input type="hidden" name="_method" value="PUT">
					      <legend>Datos Generales de la Empresa - COFADENA</legend>
						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbproducto" class="form-label">Producto</label>
				                <input type="text" id="tbproducto" name="tbproducto" class="form-control" value="<?php echo $productos1->producto;?>" required>

						    </div>
						    <div class="mb-3">
						      <label for="tdescripcion" class="form-label">Descripción</label>
						      <input type="text" id="descripcion" name="tbdescripcion" class="form-control" value="<?php echo $productos1->descripcion;?>">
						    </div>
						    <div class="mb-3">
						      <label for="tunidad" class="form-label">Unidad</label>
						      <input type="text" id="tbunidad" name="tbunidad" class="form-control" value="<?php echo $productos1->unidad;?>">
						    </div>

						    <input type="submit" value="Actualizar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>

        </div>
@endsection
