<!-- //////////////////////////////////////
                VISTA INICIO
     //////////////////////////////////////  -->

@extends('principal/Vprincipal')
@section('contenido')
<link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


<div class="container">
    <hr>
    <h4>INICIO</h4>
    <hr>
    <h5>UNIDAD DE EXPLORACIÓN DE RECURSOS HÍDRICOS </h5>
    <hr>
    <label>ESTADO DE RECURSOS Y GASTOS CORRIENTES</label>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    <input type="text" id="tbejecucion_gastos" value="{{$ejecucion_gastoss}}" hidden>
    <label>EJECUCIÓN PRESUPUESTARIA DE GASTOS</label>
     <canvas class="my-4 w-100" id="est_recursos_corrientes" width="900" height="380"></canvas>
 </div>
    <input type="text" id="tbpresupuestogastad" value="{{$presupuestogastad}}" hidden>
    <hr>



@endsection
