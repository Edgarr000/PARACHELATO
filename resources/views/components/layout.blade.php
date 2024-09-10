<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo de pagina con Bootstrap5 y Laravel 10</title>
  <link rel="stylesheet" href="{{asset('ProyectoMioLaravel/public/css/bootstrap.min.css')}}">
</head>

<body>
  <div class="container">

    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" data-bs-ride="carousel">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">Curso de Redes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('historia')}}">Historia</a>
              </li>
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('estudiantes.index')}}">CRUD DE ESTUDIANTES</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"
                      onclick="event.preventDefault();
                    document.getElementById('logOutForm').submit();
                    ">
                      Cerrar sesion
                      <form id="logOutForm" action="{{route('logOut')}}" method="post" style="display: nome;">
                        @csrf()
                      </form>

                    </a>
                  </li>
                </ul>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('ProyectoMioLaravel/public/img/portada 1.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('ProyectoMioLaravel/public/img/portada2.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('ProyectoMioLaravel/public/img/Portada3.jpeg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </header>

    <section>
      <div class="row mt-5">
        {{$slot}}
      </div>
    </section>
    <footer>
      <div class="row bg-dark mt-5 mb-5 pt-3 pb-3">
        <p class="text-center text-white">
          Todos los derechos reservados 2024. Diseñador Web Edgar Martines
        </p>
      </div>
    </footer>

  </div>
  <script src="{{asset('ProyectoMioLaravel/public/js/popper.min.js')}}"></script>
  <script src="{{asset('ProyectoMioLaravel/public/js/bootstrap.min.js')}}"></script>

</body>

</html>