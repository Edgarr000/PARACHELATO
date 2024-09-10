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
            <a href="#objetivo" class="list-group-item list-group-item-action">Objetivo</a>
            <a href="#Protocolo" class="list-group-item list-group-item-action">Protocolos
            </a>
            <a href="#funcion" class="list-group-item list-group-item-action">Función</a>
          </div>
        </aside>
        <section class="col-sm-12 col-md-8">
          <!--Definicion de WAN-->
          <div class="row">
            <div id="definicion">
              <h1>¿Qué es una red de área amplia (WAN)?</h1>
              <small> <strong> 08 de Marzo 2024 por Caleb Guerra </strong> </small> <br>
              <img src="img/imageswan.jpg" alt="">
              <p>Una red de área amplia (WAN) es la tecnología que conecta entre sí a las oficinas, los centros de datos, las aplicaciones en la nube y el almacenamiento en la nube. Se denomina red de área amplia porque se extiende más allá de un solo edificio o un gran recinto para incluir múltiples ubicaciones repartidas a lo largo de una zona geográfica concreta, o incluso del mundo. Por ejemplo, las empresas con muchas sucursales internacionales utilizan una WAN para conectar las redes de las oficinas entre sí. La WAN más grande del mundo es Internet puesto que se trata de un conjunto de muchas redes internacionales que se conectan entre sí. Este artículo se centra en las WAN empresariales y en sus usos y ventajas.</p><br><br><br>
            </div>
          </div>
          <!--/Definicion de WAN-->
          <!--objetivos-->
          <div class="row">
            <div id="objetivo">
              <h1>¿Cuál es el objetivo de una conexión WAN?</h1>
              <img src="img/Conexión-de-red-empresarial-global.png" class="img-fluid w-100" alt="...">
              <p>Las redes de área amplia (WAN) son en la actualidad el eje central de las empresas. Ante la digitalización de los recursos, las empresas utilizan las WAN para hacer lo siguiente:</p>
              <p>•	-Comunicarse mediante voz y video.</p>
              <p>•	-Compartir los recursos entre los empleados y los clientes.</p>
              <p>•	-Acceder al almacenamiento de datos y realizar copias de seguridad remotas.</p>
              <p>•	-Conectar con las aplicaciones que se ejecutan en la nube.</p>
              <p>•	-Ejecutar y alojar aplicaciones internas.</p>
              <p>Las innovaciones tecnológicas de la WAN ayudan a las organizaciones a acceder a la información de forma segura, rápida y fiable. Las redes WAN son importantes para la productividad y la continuidad del negocio.</p>
            </div>
          </div>
          <!--/objetivos-->
          <!--protocolos-->
          <div class="row">
            <div id="Protocolo">
              <h1>¿En qué consisten los protocolos WAN?</h1>
              <p>Los protocolos de red de área amplia (WAN), o protocolos de red, definen las reglas de comunicación a través de cualquier red. A continuación, se muestran algunos ejemplos:</p>
              <h2>Retransmisión de tramas</h2>
              <p>La retransmisión de tramas es una tecnología inicial que empaqueta los datos en forma de tramas y los transmite por una línea privada a un nodo de retransmisión de tramas. La retransmisión de tramas funciona en las capas 1 y 2 y facilita la transferencia de información de una LAN a otra a través de múltiples conmutadores y enrutadores.</p>
              <h3>Modo de transferencia asíncrono</h3>
              <p>El modo de transferencia asíncrono (ATM) es también una de las primeras tecnologías WAN que formatea los datos en celdas de datos de 53 bytes. Los dispositivos de la red del modo ATM utilizan la multiplexación por división de tiempo, que convierte las señales digitales en celdas de tamaño fijo, las transmite y luego las vuelve a ensamblar en su destino.</p>
              <h4>Paquete sobre SONET/SDH</h4>
              <p>Paquete sobre SONET/SDH (POS) se trata de un protocolo de comunicación que define cómo se comunican los enlaces punto a punto cuando se utiliza la fibra óptica.</p>
              <h5>TCP/IP</h5>
              <p>El Protocolo de control de transmisión/protocolo de Internet (TCP/IP) define la comunicación de extremo a extremo al especificar cómo los datos se deben empaquetar, direccionar, transmitir, enrutar y recibir. IPv6 es la versión más reciente del método más utilizado.</p>
              
            </div>
          </div>
          <!--/protocolos-->
          <!--funcion-->
          <div class="row">
            <div id="funcion">
              <h1>¿Cómo funciona una WAN?</h1>
              <p>Las empresas disponen de recursos que se ejecutan en diferentes centros de datos locales, sucursales y nubes virtuales privadas (VPC). Para establecer la conexión entre estos recursos, las empresas utilizan múltiples conexiones de red y servicios de Internet. Dado que las empresas no pueden construir su propia infraestructura de red a través de múltiples fronteras geográficas, suelen alquilarla a un proveedor de servicios externo.</p>
              <p>Estos son algunos de los tipos de conexiones más comunes:</p>
              <h2>Líneas alquiladas</h2>
              <p>Una línea alquilada es una conexión de red directa que se puede alquilar a un proveedor de red grande, como un proveedor de servicios de Internet (ISP). Puede conectar dos puntos de conexión LAN entre sí. Las líneas alquiladas no son necesariamente líneas físicas. Es posible que sean conexiones virtuales que los proveedores de servicios implementan sobre otra infraestructura de red.</p>
              <h3>Túnel</h3>
              <p>El túnel es una forma de cifrar los paquetes de datos a medida que se desplazan por la Internet pública. Con la técnica del túnel, se utiliza una conexión a Internet para acceder a los servidores de la empresa en otro país. Pero se envían como paquetes encapsulados, con lo que se forma una red privada virtual (VPN) propia.</p>
              <h4>Conmutación de etiquetas multiprotocolo</h4>
              <p>La conmutación de etiquetas multiprotocolo (MPLS) es una técnica que dirige el tráfico de datos en función de etiquetas predeterminadas. Intenta dirigir el tráfico de datos críticos a través de rutas de red más cortas o más rápidas, lo que mejora el rendimiento de la red. Funciona entre las capas 2 y 3 de la interconexión de sistemas abiertos (OSI). Se puede utilizar para crear una red unificada en la infraestructura existente, como IPv6, retransmisión de tramas, ATM o ethernet. Se pueden utilizar líneas alquiladas de MPLS o MPLS con VPN para crear redes eficaces y seguras.</p>
              <h5>WAN definida por software</h5>
              <p>La red de área amplia definida por software (SD-WAN) es la evolución posterior de la tecnología MPLS. Abstrae las funciones del MPLS a una capa de software. Dado que la WAN definida por software funciona a través de conexiones de Internet de banda ancha de uso común, normalmente puede reducir los costos de la red y proporcionar una mayor flexibilidad que una conexión fija.</p>
              <h6>MPLS frente a la WAN definida por software</h6>
              <p>MPLS puede ralentizar la integración de la nube porque dirige el tráfico a través de las sedes corporativas, que actúan como puntos de estrangulamiento centrales. Por otra parte, la WAN definida por software es compatible con la nube y se integra mucho mejor con la infraestructura moderna en la nube. La WAN definida por software también es rentable. Puede funcionar a través de MPLS de modo que sea posible utilizar el ancho de banda de forma más eficiente en las costosas líneas de alquiler de MPLS.</p>
          </div>
          <!--/funcion-->
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