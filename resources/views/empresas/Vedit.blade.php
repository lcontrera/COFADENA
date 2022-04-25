@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
                <h3>Editor</h3>

                <form action="/empresas/<?php echo $empresa->id;?>" method="POST">
                 {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-3">
                  <label for="tempresa" class="form-label">Empresa</label>
                  <input  type="text" id="tbempresa" name="tbempresa" class="form-control" value='"<?php echo $empresa->empresa;?>"' requiered>
                </div>
                <div class="mb-3">
                  <label for="tgerente" class="form-label">Gerente</label>
                  <input type="text" id="tbgerente" name="tbgerente" class="form-control" value='<?php echo $empresa->gerente;?>'requiered>
                </div>
                <div class="mb-3">
                  <label for="ttotprog" class="form-label">Total programado</label>
                  <input type="number" id="tbtotprog" name="tbtotprog" class="form-control" value='<?php echo $empresa->total_programado;?>'requiered>
                </div>
                <input type="submit" value="Actualizar" class="btn btn-success mt-5">
                <button class="btn btn-warning mt-5" type="reset"> Cancelar</button>
               </form>

                  <form action="/empresas/{{$empresa->id}}" method="POST">
                  {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">

            <div class="col-lg-8 col-sm-12">
                <div class="d-grid justify-content-end">
                    <input class="btn btn-danger mt-3" type="submit" value="Eliminar">
                </div>
      </div>

  </form>
            </div>

@endsection
