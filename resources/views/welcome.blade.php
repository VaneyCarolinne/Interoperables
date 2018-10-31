<!doctype html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>



<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Interoperables</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .bg-1 {
                background-color: #1abc9c; /* Green */
                color: #ffffff;
            }
            .bg-2 {
                background-color: #474e5d; /* Dark Blue */
                color: #ffffff;
            }
            .bg-3 {
                background-color: #ffffff; /* White */
                color: #555555;
            }
            .bg-4 {
                background-color: #2f2f2f; /* Black Gray */
                color: #fff;
            }
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }
            .slideanim {visibility:hidden;}
            .slide {
                animation-name: slide;
                -webkit-animation-name: slide;
                animation-duration: 1s;
                -webkit-animation-duration: 1s;
                visibility: visible;
            }
            @keyframes slide {
                0% {
                    opacity: 0;
                    transform: translateY(70%);
                }
                100% {
                    opacity: 1;
                    transform: translateY(0%);
                }
            }
            @-webkit-keyframes slide {
                0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
                }
                100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
                }
            }
            @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 100px ;
                justify-content: center;
            }
             h2 {
                font-size: 24px;
                text-transform: uppercase;
                color: #303030;
                font-weight: 600;
                margin-bottom: 30px;
            }
            h4 {
                font-size: 19px;
                line-height: 1.375em;
                color: #303030;
                font-weight: 400;
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height ">
            <img src="{{asset('slider/LOGO.png')}}" class="slide">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <h3>Docencia y Desarrollo Curricular</h3>
                </div>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('/slider/imagen1.png')}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/slider/imagen2.png')}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/slider/imagen3.png')}}" alt="">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>

        <!--INFO en imagenes de interoperables-->
        <div class="content row bg-1">
             <!--Info en letras-->

            <div class="col-sm-4 slide">
                <br><br>
                    <h2><strong>Normas Específicas</strong></h2>
                    <h4>Cada solicitud de Creación de Carrera  deberá  estar acompañada de un oficio por parte del ente interesado, ante la Dirección de Docencia Desarrollo Curricular de la Facultad afín , con los siguientes documentos justificativos en formato electrónico: <br>
                    1) Necesidad ocupacional en el entorno.<br>
                    2) Estudio legal, social y económico<br>
                    3) Proyección Académica en el desarrollo local, regional y nacional.<br><br><br>
                    </h4>
                    <p>Estamos ubicados en: </p><br>
                <!-- Add Google Maps -->
                <!--
                  <div class="flex-center" id="googleMap" style="height:400px;width:100%;margin-bottom:10px;"><br><br></div>
                  <script>
                      function myMap() {
                          var myCenter = new google.maps.LatLng(10.2334788,-67.9976678);
                          var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
                          var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                          var marker = new google.maps.Marker({position:myCenter});
                          marker.setMap(map);
                      }
                  </script>
                  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Tcxtg1aPWwr3E8lb4EmQ9IkDPbGJpiM=myMap"></script>
                -->
                <div class="flex-center" id="googleMap">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12830.677538748401!2d-68.00509573464883!3d10.232598375590232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e805d06949ed485%3A0x41d00169968fec7c!2sUniversidad+de+Carabobo+-+%C3%81rea+De+Postgrado!5e0!3m2!1ses-419!2sve!4v1541003136625" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-8">
                <br><br>
             <!--Animaciones-->
                <div id="demo2" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo2" data-slide-to="0" class="active"></li>
                        <li data-target="#demo2" data-slide-to="1"></li>
                        <li data-target="#demo2" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner slideanim">
                        <div class="carousel-item active">
                            <img src="{{asset('/botones/objetivos.png')}}" alt="" width="600"><br>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('botones/Alcance.png')}}" alt="" width="600"><br>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('botones/BasesLegales.png')}}" alt="" width="600"><br>
                        </div>
                    </div><br>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo2" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>

        <footer class="content bg-2 slideanim">
            <span class="glyphicon glyphicon-globe slideanim"></span>
            <br><br>
            <img src="{{asset('botones/Documentos.png')}}" alt="" class="slideanim"><br><br><br>
            <button type="button" class="btn btn-info">interoperables.com</button>
        </footer>


<script>
$(document).ready(function(){
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

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

    </body>
</html>
