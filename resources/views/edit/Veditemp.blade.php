@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
              <hr>
                <h3>EMPRESAS</h3>
                <hr>

                <form action="/uerh/<?php echo $empresas1->idempresa;?>" method="POST">
                  {{csrf_field()}}
                  		<input type="hidden" name="_method" value="PUT">
					      <legend>Datos Generales de la Empresa - COFADENA</legend>
						    <div class="mb-3">
						      <!-- EMPRESA  -->
				                <label for="tbempresa" class="form-label">EMPRESA</label>
				                <input type="text" id="tbempresa" name="tbempresa" class="form-control" value="<?php echo $empresas1->empresa;?>" required>

						    </div>
						    <div class="mb-3">
						      <label for="tdescripcion" class="form-label">Descripción</label>
						      <input type="text" id="descripcion" name="tbdescripcion" class="form-control" value="<?php echo $empresas1->descripcion;?>">
						    </div>
						    <div class="mb-3">
						      <label for="tgerente" class="form-label">Gerente</label>
						      <input type="text" id="tbgerente" name="tbgerente" class="form-control" value="<?php echo $empresas1->gerente;?>">
						    </div>
						    <div class="mb-3">
						      <label for="ttelefono" class="form-label">Teléfono</label>
						      <input type="number" id="tbetelfono" name="tbtelefono" class="form-control" value="<?php echo $empresas1->telefono;?>">
						    </div>
						    <div class="mb-3">
						      <label for="tdireccion" class="form-label">Dirección</label>
						      <input type="text" id="tbdireccion" name="tbdireccion" class="form-control" value="<?php echo $empresas1->direccion;?>">
						    </div>
						    <div class="mb-3">
						      <label for="tdireccion" class="form-label">Persona de enlace, cargo</label>
						      <input type="text" id="tbdireccion" name="tbdireccion" class="form-control" value="<?php echo $empresas1->persona_enlace_cargo;?>">
						    </div>
						    <div class="mb-3">
						      <label for="tdireccion" class="form-label">Año de creación</label>
						      <input type="text" id="tbdireccion" name="tbdireccion" class="form-control" value="<?php echo $empresas1->anho_creacion;?>">
						    </div>
						    <div class="mb-3">
						      <label for="tdireccion" class="form-label">Decreto o documento de creación</label>
						      <input type="text" id="tbdireccion" name="tbdireccion" class="form-control" value="<?php echo $empresas1->dec_supremo_doc_creacion;?>">
						    </div>
						    <input type="submit" value="Actualizar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
            </form>


        </div>
@endsection
