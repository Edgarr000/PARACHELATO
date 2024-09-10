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
            <a class="navbar-brand" href="index.html">Curso de Redes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="historia.html">Historia</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tipos
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="lan.html">LAN</a></li>
                    <li><a class="dropdown-item" href="man.html">MAN</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="wan.html">WAN</a></li>
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
            <a href="#definicion" class="list-group-item list-group-item-action " aria-current="true">
                Definicion
            </a>
            <a href="#aplicaciones" class="list-group-item list-group-item-action">Aplicaciones</a>
            <a href="#redprivadaypublica" class="list-group-item list-group-item-action">MAN pública y privada
            </a>
          </div>
        </aside>
        <section class="col-sm-12 col-md-8">
          <!--Definicion de MAN-->
          <div class="row">
            <div id="definicion">
              <h1>Red de área metropolitana</h1>
              <small> <strong> 8 de Marzo 2024 por Caleb Guerra </strong> </small> <br>
              <img src="img/RED MAN.png" alt="">
              <p>Una red de área metropolitana (MAN, Metropolitan Area Network) es una red de alta velocidad (banda ancha) que da cobertura en un área geográfica extensa, proporcionando capacidad de integración de múltiples servicios mediante la transmisión de datos, voz y vídeo, sobre medios de transmisión tales como fibra óptica y par trenzado (MAN BUCLE).1​ La tecnología de pares de cobre se posiciona como la red más grande del mundo una excelente alternativa para la creación de redes metropolitanas, por su baja latencia (entre 1 y 50 ms), gran estabilidad y la carencia de interferencias radioeléctricas, las redes MAN BUCLE, ofrecen velocidades de 10 Mbit/s o 20 Mbit/s, sobre pares de cobre y 100 Mbit/s, 1 Gbit/s y 10 Gbit/s mediante fibra óptica.</p>
              <p>Otra definición podría ser: Una MAN es una colección de LANs o CANs dispersas en una ciudad (decenas de kilómetros). Una MAN utiliza tecnologías tales como ATM, Frame Relay, DSL (Digital Subscriber Line), WDM (Wavelength Division Multiplexing), ISDN, E1/T1, PPP, etc. para conectividad a través de medios de comunicación tales como cobre, fibra óptica, y microondas.</p>
              <p>Las Redes MAN BUCLE, se basan en tecnologías Bonding, de forma en que los enlaces están formados por múltiples pares de cobre con el fin de ofrecer el ancho de banda necesario.</p>
              <p>Además esta tecnología garantice SLAS'S del 99,999, gracias a que los enlaces están formados por múltiples pares de cobre y es materialmente imposible que 4, 8 o 16 hilos se averíen de forma simultánea.</p>
              <p>El concepto de red de área metropolitana representa una evolución del concepto de red de área local a un ámbito más amplio, cubriendo áreas mayores que en algunos casos no se limitan a un entorno metropolitano sino que pueden llegar a una cobertura regional e incluso nacional mediante la interconexión de diferentes redes de área metropolitana.</p>
              <p>Este tipo de redes es una versión más grande que la LAN y que normalmente se basa en una tecnología similar a esta. La principal razón para distinguir una MAN con una categoría especial es que se ha adoptado un estándar para que funcione, que equivale a la norma IEEE.</p>
              <p>Las redes WAN también se aplican en las organizaciones, en grupos de oficinas corporativas cercanas a una ciudad, estas no contienen elementos de conmutación, los cuales desvían los paquetes por una de varias líneas de salida potenciales. Estas redes pueden ser públicas o privadas.</p>
              <p>Las redes de área metropolitana, comprenden una ubicación geográfica determinada "ciudad, municipio", y su distancia de cobertura es mayor de 4 km. Son redes con dos buses unidireccionales, cada uno de ellos es independiente del otro en cuanto a la transferencia de datos.</p><br><br><br>
            </div>
          </div>
          <!--/Definicion de MAN-->
          <!--aplicaciones-->
          <div class="row">
            <div id="aplicaciones">
              <h1>Aplicaciones</h1>        
              <p>Las redes de área metropolitana tienen muchísimas y variadas aplicaciones, las principales son:</p>
              <p>Despliegue de servicios de VoIP (Voz sobre Protocolo de Internet), en el ámbito metropolitano, permitiendo eliminar las "obsoletas" líneas tradicionales de telefonía analógica o RDSI, eliminando el gasto corriente de estas líneas.</p>
              <p>Interconexión de redes de área local (LAN).</p>
              <p>Despliegue de Zonas Wifi sin Backhaul inalámbrico (Femtocell) liberando la totalidad de canales Wifi para acceso, esto en la práctica supone más del 60% de mejora en la conexión de usuarios wifi.</p>
              <p>Interconexión ordenador a ordenador.</p>
              <p>Sistemas de videovigilancia municipal.</p>
              <p>Transmisión CAD/CAM.</p>
              <p>Pasarelas para redes de área extensa (WAN).</p>
              <p>También permiten la transmisión de tráficos de voz, datos y vídeo con garantías de alta latencia, razones por las cuales se hace necesaria la instalación de una red de área metropolitana a nivel corporativo, para corporaciones que cuentan con múltiples dependencias en la misma área capital.</p>


            </div>
          </div>
          <!--/aplicaciones-->
          <!--MAN pública y privada-->
          <div class="row">
            <div id="redprivadaypublica">
              <h1>MAN pública y privada</h1>
              <p>Una red de área metropolitana puede ser pública o privada.</p>
              <p>Un ejemplo de MAN privada sería un gran departamento o administración con edificios distribuidos por la ciudad, transportando todo el tráfico de voz y datos entre edificios por medio de su propia MAN y encaminando la información externa por medio de los operadores públicos.</p>
              <P>Los datos podrían ser transportados entre los diferentes edificios, bien en forma de paquetes o sobre canales de ancho de banda fijos.</P>
              <P>Aplicaciones de vídeo pueden enlazar los edificios para reuniones, simulaciones o colaboración de proyectos.</P>
              <p>Un ejemplo de MAN pública es la infraestructura que un operador de telecomunicaciones instala en una ciudad con el fin de ofrecer servicios de banda ancha a sus clientes localizados en esta área geográfica.</p>
              <h2>Nodos de red</h2>
              <p>Las redes de área ciudadana permiten ejecutar y superar los 600 nodos de acceso a la red, por lo que se hace muy eficaz para entornos públicos y privados con un gran número de puestos de trabajo.</p>
              <h3>Extensión de red</h3>
              <p>Las redes de área metropolitana permiten alcanzar un diámetro en torno a los 50 km, dependiendo el alcance entre nodos de red del tipo de cable utilizado, así como de la tecnología empleada. Este diámetro se considera suficiente para abarcar un área metropolitana. Abarcan una ciudad y se pueden conectar muchas entre sí, formando más redes entre sí.</p>
              <h4>Distancia entre nodos</h4>
              <p>Las redes de área metropolitana permiten distancias entre nodos de acceso de varios kilómetros, dependiendo del tipo de cable. Estas distancias se consideran suficientes para conectar diferentes edificios en un área metropolitana o campus privado.</p>
              <h5>Tráfico en tiempo real</h5>
              <p>Las redes de área metropolitana garantizan unos tiempos de acceso a la red mínimos, lo cual permite la inclusión de servicios síncronos necesarios para aplicaciones en tiempo real, donde es importante que ciertos mensajes atraviesen la red sin retraso incluso cuando la carga de red es elevada.</p>
              <p>Entre nodo y nodo no se puede tener, por ejemplo más de 100 kilómetros de cable. Se puede tener en aproximación límite unos 20 km de cable, pero no se sabe en que momento se puede perder la información o los datos mandados.</p>
              <p>Los servicios síncronos requieren una reserva de ancho de banda; tal es el caso del tráfico de voz y vídeo. Por este motivo las redes de área metropolitana son redes óptimas para entornos de tráfico multimedia, si bien no todas las redes metropolitanas soportan tráficos isócronos (transmisión de información a intervalos constantes).</p>
              
            </div>
          </div>
          <!--MAN pública y privada-->
        
          

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