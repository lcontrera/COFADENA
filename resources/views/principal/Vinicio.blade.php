<!-- //////////////////////////////////////
                VISTA INICIO
     //////////////////////////////////////  -->

@extends('principal/Vprincipal')
@section('contenido')
<div class="conteiner">
    <hr>
    <h4>RESUMEN DE EFICIENCIA</h4>
    <hr>

    <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
    <canvas class="my-4 w-100" id="myChart" width="900" height="300"></canvas>
</div>
	<script src="js/chart.js"></script>
	<script src="js/dashboard.js"></script>
@endsection
