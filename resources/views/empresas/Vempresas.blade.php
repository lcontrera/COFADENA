@extends('principal/Vprincipal')
@section('contenido')


            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                  <div class="card w-30">
  <div class="col">
    <div class="card">
      <a href="/uerh"><img src="{{asset('img/UERH.jpg')}}" class="card-img-top" alt="..."></a>
      <div class="card-body text-white bg-primary mb-3">
  <a class="nav link text-white" href="/uerh">
                  <span data-feather="framer"></span>
                  UERH
                </a>
        <h5 class="card-title">UNIDAD DE EXPLORACIÓN DE RECURSOS HÍDRICOS</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="/upab"><img src="{{asset('img/UPAB.jpg')}}" class="card-img-top" alt="..."></a>
      <div class="card-body text-white bg-primary mb-3">
  <a class="nav link text-white" href="/upab">
                        <span data-feather="feather"></span>
                        UPAB
                      </a>
        <h5 class="card-title">UNIDAD PRODUCTIVA AGRICOLA BERMEJO</h5>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="/ugc23m"><img src="{{asset('img/UGC23M.jpg')}}" class="card-img-top" alt="..."></a>
      <div class="card-body text-white bg-primary mb-3">
        <a class="nav link text-white" href="/ug23">
                    <span data-feather="truck"></span>
                        UGC23M
                      </a>
        <h5 class="card-title">UNIDAD GANADERA CAMPO 23 DE MARZO</h5>

      </div>
    </div>
  </div>
</div>
<div class="card w-30">
  <div class="col">
    <div class="card">
      <a href="/enauto"><img src="{{asset('img/ENAUTO.jpg')}}" class="card-img-top" alt="..."></a>
      <div class="card-body text-white bg-primary mb-3">
        <a class="nav link text-white" href="/enauto">
                    <span data-feather="truck"></span>
                        ENAUTO
                      </a>
        <h5 class="card-title">EMPRESA NACIONAL AUTOMOTRIZ</h5>

      </div>
    </div>
  </div>
    <div class="col">
    <div class="card">
      <a href="/fbm"><img src="{{asset('img/FBM.png')}}" class="card-img-top" alt="..."></a>
      <div class="card-body text-white bg-primary mb-3">
  <a class="nav link text-white" href="/fbm">
                    <span data-feather="wind"></span>
                        FBM
                      </a>
        <h5 class="card-title">FÁBRICA BOLIVIANA DE MUNICIÓN</h5>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <a href="/uepi"><img src="{{asset('img/UEPII.jpg')}}" class="card-img-top" alt="..."></a>
      <div class="card-body text-white bg-primary mb-3">
        <a class="nav link text-white" href="/uepi">
                    <span data-feather="git-pull-request"></span>
                        UEPII
                      </a>
        <h5 class="card-title">UNIDAD DE EJECUCIÓN DE INFRAESTRUCTURA E INGENIERÍA</h5>

      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection