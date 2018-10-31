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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
                    Interoperables UC
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
                        <img src="/slider/imagen1.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/slider/imagen2.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/slider/imagen3.png" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>
                <br><br><br>
</div>

                <div class="rows"> 
                <ul class="collapsible">
                   

                    <a href="#mision" type="button" class="btn btn-light" data-toggle="collapse">Misión</a>
                    <a href="#vision" type="button" class="btn btn-dark" data-toggle="collapse">Visión</a>

                    <a href="#objetivos" type="button" class="btn btn-info" data-toggle="collapse">Objetivos</a>
                    <a href="#documentos" type="button" class="btn btn-primary" data-toggle="collapse">Documentos</a>
                    <div id="mision" class="collapse">
                    <span>  Hola colocar mision...porfis xD </span>
                    </div>
                    
                    <div id="vision" class="collapse">
                      <span>Hola colocar vision...porfis xD</span>
                    </div>
                    <div id="objetivos" class="collapse">
                       <span>Hola colocar objetivos...porfis xD</span>
                    </div>
                    <div id="documentos" class="collapse">
                       <span>Hola colocar documentos...porfis xD</span>
                    </div>
                    <script>
                        var coll = document.getElementsByClassName("collapsible");
                        var i;

                        for (i = 0; i < coll.length; i++) {
                            coll[i].addEventListener("click", function() {
                                this.classList.toggle("active");
                                var content = this.nextElementSibling;
                                if (content.style.visibility === "visible") {
                                    content.style.display = "hidden";
                                } else {
                                    content.style.display = "visible";
                                }
                            });
                        }
                    </script>
                </ul>



                </div>
            </div>
        </div>
    </body>
</html>
