<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>La Lancha - El Torno</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 8px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 40px 60px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
     /* -webkit-filter: grayscale(90%);*/
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
     
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">La Lancha</a>
      <link rel="icon" type="image/x-icon" href="favicon.ico" />
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">INICIO</a></li>
        <li><a href="#desc">DESCRIPCIÓN</a></li>
        <li><a href="#googleMap">UBICACIÓN</a></li>
        <li><a href="#contact">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/COMEDOR.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Sala de estar</h3>
        </div>      
      </div>

      
      <div class="item">
        <img src="img/comedor3.jpg" alt="Chicago3" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Sala de estar y cocina</h3>
        </div>      
      </div>

      <div class="item">
        <img src="img/2habitaciondoble.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Habitación</h3>
        </div>      
      </div>
    
      <div class="item">
        <img src="img/3habitaciondoscamas1.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Habitación</h3>
        </div>      
      </div>

      <div class="item">
        <img src="img/3habitaciondoscamas2.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Habitación</h3>
        </div>      
      </div>

   <div class="item">
        <img src="img/4servicio1.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Servicio</h3>
        </div>      
      </div>

	   <div class="item">
        <img src="img/4servicio2.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Servicio</h3>
        </div>      
      </div>

      <div class="item">
        <img src="img/5aseo.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Aseo</h3>
        </div>      
      </div>

      <div class="item">
        <img src="img/6cochera.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Cochera</h3>
        </div>      
      </div>


    </div>



    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>

<!-- Container -->
<div id="desc" class="container text-justify">
  <h3>LA CASA RURAL</h3>
  <b><u>Descripción</u></b>
  <br>
  <br>
  <p>La Lancha está en el municipio de El Torno (Cáceres), un pueblo de sierra, con vistas panorámicas al Valle del Jerte, situado al norte de Extremadura. 
<br>
 El Torno es conocido por sus vistas al Valle de Jerte, que goza de tranquilidad. Es un lugar idóneo para realizar senderismo. Los habitantes de este pueblo viven de la agricultura y la ganadería. 
<br>
La Lancha dispone de 2 dormitorios exteriores, 1 con cama de matrimonio y otro con 2 camas, ambas equipadas con sábanas y mantas. Un cuarto de baño y un aseo con juego de toallas y secador. También tiene un salón-cocina-comedor con todos los menaje necesarios (Vitrocerámica, horno-microondas, tostadora, batidora, sandwichera, lavadora, frigorífico, lavavajillas, televisión...). El garaje está incluido en el precio y la casa dispone de aire acondicionado y calefacción.
<br>
Disponemos de información de ocio y tiempo libre. 
<br>
La casa rural está próxima a tiendas como farmacias, supermercado, tienda de productos típicos, restaurante... Acceso desde Madrid desde la A-5, dirección Palencia. Y por la A-6, dirección Ávila. Desde ambas direcciones, desviarse hacia la nacional 110.
<br>
¡Ven y disfruta de un entorno privilegiado!  
<br>
<br>
<b><u>Información de tarifas</u></b>
<br>
<br>
Casa completa 110€/día, a partir de 4 días consultar precio.
<br>
Estancia mínima 2 días. 
<br>
Entrada a partir de las 14:00h.
<br>
Salida a las 12:00h.
<br>
Para formalizar la reserva es necesario ingresar en cuenta el 25% del importe total de la estancia, el pago restante se efectuará al contado a la llegada a la casa. No se devolverá el importe de la reserva cuando la anulación se haga con menos de 15 días de antelación al día de entrada.

</p>
  <br>
  <div class="row">

    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="img/flor3.jpg"  alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Cerezos en flor</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/pilones.jpg"  alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Garganta de los Infiernos</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="img/calderon.jpg" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Garganta El Calderón</p>
      </div>
    </div>
 </div>

<div class="row">
     <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo9" data-toggle="collapse">
        <img src="img/cerezos.jpg" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo9" class="collapse">
        <p>Cerezas maduras</p>
      </div>
    </div>

     <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="img/mirador.jpg" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Esculturas en El Torno</p>
      </div>
    </div>

     <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="img/piscina1.jpg" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p>Piscina Municipal de El Torno</p>
      </div>
    </div>
 </div>

<div class="row">
     <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="img/flor2.jpg" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo6" class="collapse">
        <p>Cerezo en Flor</p>
      </div>
    </div>

     <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo7" data-toggle="collapse">
        <img src="img/caozo.jpg" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo7" class="collapse">
        <p>Garganta El Caozo</p>
      </div>
    </div>

     <div class="col-sm-4">
      <p class="text-center"><strong></strong></p><br>
      <a href="#demo8" data-toggle="collapse">
        <img src="img/iglesia.jpg" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo8" class="collapse">
        <p>Iglesia de El Torno</p>
      </div>
    </div>


  </div>
</div>


<!-- Add Google Maps -->
<h3 class="text-center">Ubicación</h3>
<div id="googleMap"></div>

<script>
function myMap() {
var myCenter = new google.maps.LatLng(40.1343038,-5.9450095,20);
var mapProp = {center:myCenter, zoom:13, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxomFupiTNr-WO_8UX0-3yVjR-hLaMQ4I&callback=myMap"></script>

<div align="center">
<div id="c_5924b2bdfa27e2060f5785d30b02791b" class="ancho"></div><script type="text/javascript" src="https://www.eltiempo.es/widget/widget_loader/5924b2bdfa27e2060f5785d30b02791b"></script>
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contacto</h3>


  <div class="text-center">
    <p><span class="glyphicon glyphicon-map-marker"></span>Calle Lancha Redonda, 27, 10617 El Torno, Cáceres</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telefono: +34 679640712</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: lalanchaeltorno@gmail.com</p>
  </div>
  <br>
  

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Web Design: Gustavo Sanchez - <a href="mailto:gsanchezcollado@gmail.com">
              gsanchezcollado@gmail.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
