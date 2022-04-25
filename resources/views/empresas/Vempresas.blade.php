@extends('principal/Vprincipal')
@section('contenido')


            <div class="container">
              <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col" style="width: 410px; margin-right: 30px;">
                  <div class="card">
                    <a href="/uerh"><img src="{{asset('img/UERH.jpg')}}" class="card-img-top" alt="..."></a>
                    <!--<img src="{{asset('img/UERH.jpg')}}" class="card-img-top" alt="...">-->
                   <div class="card-body text-white bg-primary mb-3">

                <a class="nav link text-white" href="/uerh">
                  <span data-feather="layers"></span>
                  UERH
                </a>

                      <p class="card-text">UNIDAD DE EXPLORACIÓN DE RECURSOS HÍDRICOS</p>
                    </div>
                  </div>
                </div>
                <div class="col" style="width: 410px; margin-right: 30px;">
                  <div class="card">
                    <a href="/upab"><img src="{{asset('img/UPAB.jpg')}}" class="card-img-top" alt="..."></a>
                    <!--<img src="{{asset('img/UPAB.jpg')}}" class="card-img-top" alt="...">-->
                    <div class="card-body text-white bg-primary mb-3">

                      <a class="nav link text-white" href="/upab">
                        <span data-feather="layers"></span>
                        UPAB
                      </a>

                      <p class="card-text">UNIDAD PRODUCTIVA AGRICOLA BERMEJO</p>
                    </div>
                  </div>
                </div>
                <div class="col" style="width: 410px; margin-right: 30px;">
                  <div class="card">
                    <a href="/ugc23m"><img src="{{asset('img/UGC23M.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body text-white bg-primary mb-3">

                      <a class="nav link text-white" href="/ugc23m">
                        <span data-feather="layers"></span>
                        UGC23M
                      </a>

                      <p class="card-text">UNIDAD GANADERA CAMPO 23 DE MARZO </p>
                    </div>
                  </div>
                </div>
                <div class="col" style="width: 410px; margin-right: 30px;">
                  <div class="card">
                    <a href="/enauto"><img src="{{asset('img/ENAUTO.jpg')}}" class="card-img-top" alt="..."></a>
                    <!--<img src="{{asset('img/ENAUTO.jpg')}}" class="card-img-top" alt="...">-->
                    <div class="card-body text-white bg-primary mb-3">
                      <a class="nav link text-white" href="/enauto">
                        <span data-feather="layers"></span>
                        ENAUTO
                      </a>

                      <p class="card-text">EMPRESA NACIONAL AUTOMOTRIZ</p>
                    </div>
                  </div>
                  <div class="col" style="width: 410px; margin-right: 30px;">
                  <div class="card">
                    <a href="/fbm"><img src="{{asset('img/FBM.png')}}" class="card-img-top" alt="..."></a>
                    <!--<img src="{{asset('img/FBM.png')}}" class="card-img-top" alt="...">-->
                    <div class="card-body text-white bg-primary mb-3 active">

                      <a class="nav link text-white " href="/ugc23m">
                        <span data-feather="layers"></span>
                        FBM
                      </a>

                     <p class="card-text">FÁBRICA BOLIVIANA DE MUNICIÓN</p>
                    </div>
                  </div>
                </div>
              </div>

</div>
@endsection