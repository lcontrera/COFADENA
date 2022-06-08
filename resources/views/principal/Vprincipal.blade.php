<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('datatables/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('datatables/DataTables-1.12.0/css/dataTables.bootstrap5.min.css')}}">
     <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--Custom styles for this template-->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">



    <title>SSCTA - COFADENA</title>

  </head>
<!--**************************************
                BODY
     **************************************-->
  <body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-12 col-md-3 col-lg-2 me-0 px-3" href="https://www.bcb.gob.bo/librerias/indicadores/otras/ultimo.php">TIPO DE CAMBIO</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <label class="fs-3 text-center text-light w-100">SISTEMA DE SEGUIMIENTO Y CONTROL TECNICO ADMINISTRATIVO - COFADENA</label>
    </header>


    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-1">
            <ul class="nav flex-column">
              <li class="nav-item">



                <a class="nav-link active" aria-current="page" href="/inicio">
                    <span data-feather="home"></span>
                    INICIO
                </a>
              </li>
              <li class="nav-item">

                <a class="nav-link" href="/empresas">
                  <span data-feather="layers"></span>
                  EMPRESAS
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/fichas">
                  <span data-feather="shopping-cart"></span>
                  FICHA TÉCNICA
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/reportes">
                  <span data-feather="bar-chart-2"></span>
                  REPORTES
                </a>
              </li>
              <li class="nav-item">

                  <div class="mt-5 text-center">
                    <img src="{{asset('img/logo.png')}}"  class="img-fluid" width="100" height="100" >
                    <p>Desarrollado por<br>
                    <b>Cofadena</b><br>
                    Copyright &copy 2022
                  </p>
                  </div>


              </li>

            </ul>
          </div>
        </nav>

        <main class=" col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('contenido')
            <img src="{{asset('img/bg.png')}}" alt="" class="img-fluid">
        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



   <script src="{{asset('js/dashboard.js')}}"></script>
   @yield('js')

   <!-- jQuery, Popper.js, Bootstrap JS -->

    <script src="{{asset('popper/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="{{asset('datatables/datatables.min.js')}}"></script>

    <!-- para usar botones en datatables JS -->
    <script src="{{asset('datatables/Buttons-2.2.3/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('datatables/JSZip-2.5.0/jszip.min.js')}}"></script>
    <script src="{{asset('datatables/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
    <script src="{{asset('datatables/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
    <script src="{{asset('datatables/Buttons-2.2.3/js/buttons.html5.min.js')}}"></script>
   <script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>
   <script src="{{asset('js/dropdown.js')}}"></script>

    <!-- código JS propìo-->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

     <!--   <main>

            <div class="container">
                <h3>RESUMEN</h3>

            </div>
        </main>
        <!ENLACE JS>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
    </body>
</html>
