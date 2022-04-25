@extends('principal/Vprincipal')
@section('contenido')
            <div class="container">
              <hr>
                <h3>PRODUCTOS</h3>
                <hr>
                <form action="/productos" method="POST">
                  {{csrf_field()}}
                <legend>Datos Generales - COFADENA</legend>
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
@endsection
