@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
              <hr>
                <h3>FICHAS TECNICAS</h3>
                <hr>
                <form action="/empresas" method="POST">
                  {{csrf_field()}}
					      <legend>Datos Generales de la Empresa - COFADENA</legend>
						    <div class="mb-3">
						      <label for="tempresa" class="form-label">Empresa</label>
						      <input  type="text" id="tbempresa" name="tbempresa" class="form-control" placeholder="Ingrese empresa..."requiered>
						    </div>
						    <div class="mb-3">
						      <label for="tgerente" class="form-label">Gerente</label>
						      <input type="text" id="tbgerente" name="tbgerente" class="form-control" placeholder="Ingrese gerente..."requiered>
						    </div>
						    <div class="mb-3">
						      <label for="ttotprog" class="form-label">Total programado</label>
						      <input type="number" id="tbtotprog" name="tbtotprog" class="form-control" placeholder="Monto programado..."requiered>
						    </div>
						    <input type="submit" value="Guardar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
                </div>
						</form>
@endsection
