<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
                  <a class="nav-link " aria-current="page" href="{{route('home')}}">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('historia')}}">Historia</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tipos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('lan')}}">LAN</a></li>
                    <li><a class="dropdown-item" href="{{route('man')}}">MAN</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{route('man')}}">WAN</a></li>
                  </ul>
                </li>
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
              <img src="img/portada 1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/portada2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Portada3.jpeg" class="d-block w-100" alt="...">
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
        <aside class="col-sm-12 col-md-4">
          <div class="list-group">
            <a href="#evolucion" class="list-group-item list-group-item-action " aria-current="true">
                Evolución
            </a>
            <a href="#funcion" class="list-group-item list-group-item-action">Función</a>
            <a href="#cronologia" class="list-group-item list-group-item-action">Cronología</a>
          </div>
        </aside>
        <section class="col-sm-12 col-md-8">
          <!--Evolucion de red-->
          <div class="row">
            <div id="evolucion">
              <h1>Historia y evolución de las redes informáticas</h1>
              <small> <strong> 01 de Marzo 2024 por Caleb Guerra </strong> </small> <br>
              <img src="img/evolucion.jpg" alt="">
              <p>El mundo atrapado por una telaraña: desde su surgimiento, las redes han evolucionado conforme lo demandan las necesidades de comunicación, verbal o visual. He aquí un recuento de la aparición de los diferentes dispositivos que componen una red. Las primeras redes comerciales se valían del protocolo Arcnet (Attached Resource Computer Network), desarrollado por Datapoint Corporation, alrededor de 1980. Utilizaba cable coaxial y empleaba conexiones de 2.5 Mbps, en ese tiempo considerada alta velocidad, ya que los usuarios estaban acostumbrados a compartir información vía puerto paralelo o serial, donde la transmisión era muy lenta.</p>
              <p>Se puede decir que las redes informáticas tal y como las conocemos hoy en día empezaron con el desarrollo de ARPANET a finales de la década de los 60s. Algo con lo que ya se había teorizado desde muchos años antes, pero que culminó en 1969 con la primera transferencia de datos entre dos ordenadores situados a más de 600km de distancia.</p>
              <p>Antes de ese momento, existían redes de proveedores de ordenadores diseñadas principalmente para conectar terminales o estaciones de trabajo remotas a un ordenador central.</p><br><br><br>
            </div>
          </div>
          <!--/Evolucion de red-->
          <!--Funcion de las redes-->
          <div class="row">
            <div id="funcion">
              <h1>Función en ráfagas</h1>
              <img src="img/rafaga.jpg" class="img-fluid w-100" alt="...">
              <p>Para poder llevar el concepto de ARPANET a la práctica, Leonard Kleinrock fue el responsable de investigar y desarrollar la técnica de conmutación de paquetes. Gracias a su desarrollo se podían compartir de manera eficiente los recursos de comunicación entre usuarios situados en distintas ubicaciones.</p>
              <p>Una historia que comienza a mediados del siglo XX y no para de aportar nuevas mejoras e implementaciones hasta la actualidad. ¿Qué nos depara el futuro? Pues suponemos que muchos años más de evolución para hacer que la transferencia de datos a través de las redes informáticas sea todavía más rápida y eficiente.</p><br><br>
              <h2>El futuro de las redes informáticas</h2>
              <p>El futuro de las redes informáticas pasa por la innovación y la mejora de los sistemas y redes de telecomunicaciones. Un futuro que, además necesita profesionales especializados como tú.</p>
              <p>Un campo en constante evolución y en constante transformación que te va a dar la oportunidad de crecer a nivel personal y profesional.</p><br><br>


            </div>
          </div>
          <!--/Funcion de las redes-->
          <!--cronologia-->
          <div class="row">
            <div id="cronologia">
              <h1>Cronología de la evolución de las redes informáticas</h1>
              <p>Vamos a ver algunas de las fechas más importantes en la historia y evolución de las redes informáticas. Se trata de hitos tecnológicos  y momentos muy importantes que sirven para entender su actual relevancia y el potencial de cambio que tendrán en el futuro las redes.</p>
              <p>•	-1961. La idea de ARPANET, una de las primeras redes de ordenadores, fue propuesta por Leonard Kleinrock en un artículo titulado: “Information Flow in Large Communication Nets.”</p>
              <p>•	-1969. Internet nació oficialmente, con la primera transmisión de datos enviada entre UCLA (Universidad de California) y el SRI (Instituto de Investigación de Standford)</p>
              <p>•	-1973. La primera conexión de red internacional, llamada SATNET, fue implementada en 1973 por ARPA.</p>
              <p>•	-1978. Bob Kahn inventó el protocolo TCP / IP para redes.</p>
              <p>•	-1981. El protocolo de Internet versión 4, o IPv4, se definió oficialmente en 1981. IPv4 fue la primera versión importante del protocolo de Internet.</p>
              <p>•	-1981. BITNET se creó en 1981 como una red entre los sistemas de IBM en los Estados Unidos.</p>
              <p>•	-1983. ARPANET finalizó la transición al uso de TCP / IP en 1983.</p>
              <p>•	-1984. Se funda CISCO, que se convertiría en una de las mayores empresas de instalación y mantenimiento de redes.</p>
              <p>•	-1988. La tecnología de red WaveLAN, precursora oficial de Wi-Fi, fue introducida al mercado por AT & T, Lucent y NCR en 1988.</p>
              <p>•	-1988. Los detalles sobre la tecnología de cortafuegos de red se publicaron en un artículo que analizaba el primer cortafuegos, llamado cortafuegos de filtro de paquetes.</p>
              <p>•	-1990. Kalpana, una empresa de hardware de red estadounidense, desarrolló e introdujo el primer conmutador de red en 1990.</p>
              <p>•	-1996. IPv6 se introdujo en 1996 como una mejora sobre IPv4, incluida una gama más amplia de direcciones IP, enrutamiento mejorado y cifrado integrado.</p>
              <p>•	-1999. El estándar 802.11a para Wi-Fi se hizo oficial en 1999, diseñado para usar la banda de 5 GHz y proporcionar velocidades de transmisión de hasta 25 Mbps.</p>
              <p>•	-2003. El protocolo de encriptación WPA2 se introduce como una mejora y reemplazo de WPA.</p>
              <p>•	-2009. El estándar 802.11n para Wi-Fi se hizo oficial. Proporciona velocidades de transferencia superiores a 802.11ay 802.11g, y puede funcionar en anchos de banda de 2,4 GHz y 5 GHz.</p>
              <p>•	-2018. Wi-Fi Alliance introdujo el cifrado WPA3 para Wi-Fi, que incluye mejoras de seguridad sobre WPA2.</p>
            </div>
          </div>
          <!--/cronologia-->

        </section>
      </div>
    </section>
    <footer>
      <div class="row bg-dark mt-5 mb-5 pt-3 pb-3">
        <p class="text-center text-white">
          Todos los derechos reservados 2024. Diseñador Web Jeferson Caleb Guerra Sorto
        </p>
      </div>
    </footer>

  </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>