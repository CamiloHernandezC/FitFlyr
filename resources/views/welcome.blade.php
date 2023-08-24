<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="google-site-verification" content="P_yEgFijsmcG-GjA_AgDfW4N384ev7ACxASfQB2n-2I" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>@lang('general.AppName')</title>
        <meta name="description" content="Recibe Ofertas de Entrenadores Personales, Compara y Elige al Entrenador Correcto por el Precio que Quieres"/>
        <link rel="canonical" href="{{env('APP_URL')}}/"/>

        <link rel="stylesheet" href="{{asset('css/review.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,900|K2D" rel="stylesheet" type="text/css">

        <!-- bootstrap 4.1.0 -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <!-- End bootstrap -->

        <!--footer-->
        <link rel="stylesheet" href="{{asset('css/footer/footer-distributed-with-address-and-phones.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

        <link rel="stylesheet" href="{{asset('css/carousel.css')}}">

        <link rel="stylesheet" href="{{asset('css/utils.css')}}">

        <link rel="stylesheet" href="{{asset('css/chats.css')}}">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FGK3JF6PWV"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-FGK3JF6PWV');
        </script>

    </head>
    <body data-spy="scroll" data-target=".navbar">

    <!--Navbar color effect
    <script>
        $(window).on("scroll", function() {
            $("#top-navbar").css("backgroundColor", 'rgba(0, 0, 0, '+$(window).scrollTop());
        });
    </script>
    -->

    <nav id="top-navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="#" style="width: 60px; padding: 0">
            <img src="{{asset('images/brand/logo_letras_blanco.svg')}}" width="70%" height="70%">
            <!--<h3 class="d-inline-block brand-name"><span>FIT</span>FLYR</h3>-->
        </a>
        <div class="top-right links">
            <a href="{{ route('blogs') }}">Blogs</a>
        @auth
            <a href="{{route('home', ['user'=> Auth::user()->slug])}}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Registro</a>
        @endauth

        </div>
    </nav>

    <div id="welcome" class="flex-center position-ref full-height">
        <div class="content">
            <div class="title mb-3">
                <img src="{{asset('images/brand/imago_blanco.svg')}}" width="30%" height="30%">
            </div>
            <h4 class="mb-5">Ven a <strong>Saltar</strong> hasta el cielo, con el deporte <strong>Más Divertido.</strong></h4>
            <a class="btn btn-success d-inline" style="font-size: 20px; padding: 7px 35px;" href="{{ route('register') }}">
                ¡Quiero Saltar!
            </a>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="sub-section-info">
            <h1 class="mb-5">¿Qué es el ejercicio de rebote?</h1>
            <p class="text-justify">
            Es un programa de ejercicio cardiovascular de bajo impacto que utiliza botas especiales con resortes y el sistema de protección de impacto IPS. Este sistema absorbe la mayoría del impacto en las articulaciones, lo que lo hace más seguro que otros ejercicios de alto impacto.
            Es una forma divertida y efectiva de mejorar la salud cardiovascular, la coordinación y quemar calorías mientras proteges tus articulaciones.
            </p>
        </div>
        <div class="boots-image d-flex align-items-center">
            <img class="h-100 w-100 how-works-image m-auto" src="{{asset('images/botas_2.png')}}" alt="First slide">
        </div>
    </div>
    <div class="text-center section d-block color-white" id="section2">
        <!--repetido pero con el orden de la info y la imagen diferente para que en dispositivos pequeños el texto esté siempre arriba-->
        <div class="m-auto">
            <h1 class="mb-4">Beneficios</h1>
        </div>
        <table class="col-md-6 m-auto" style="border-collapse: separate;
border-spacing: 1em;">
            <tr>
                <td><i class="fas fa-heartbeat benefits_icon text-center d-table-cell align-middle" style="font-size: 50px"></i></td>
                <td class="h4">Mejora la resistencia cardiovascular.</td>
            </tr>
            <tr>
                <td><img src = "{{asset('images/fire_icon.svg')}} " alt="Calorias" class="benefits_icon svg_white"/></td>
                <td class="h4">Quema 20% más calorías que un ejercicio cardiovascular tradicional.</td>
            </tr>
            <tr>
                <td><img src = "{{asset('images/muscle_icon.svg')}} " alt="Tonifica" class="benefits_icon svg_white"/></td>
                <td class="h4">Ayuda a tonificar los músculos de las piernas, glúteos y abdominales.</td>
            </tr>
            <tr>
                <td><img src = "{{asset('images/balance_icon.svg')}} " alt="Balance" class="benefits_icon svg_white"/></td>
                <td class="h4">Mejorar la coordinación y el equilibrio.</td>
            </tr>
            <tr>
                <td><img src = "{{asset('images/happy_icon.svg')}} " alt="Felicidad" class="benefits_icon svg_white"/></td>
                <td class="h4">Reduce el estrés y mejorar el estado de ánimo, gracias a la liberación de endorfinas.</td>
            </tr>
        </table>
    </div>
    <div class="section text-center d-block" id="section3">
        <h1 class="mb-5">Modalidades</h1>
        <div class="d-flex flex-wrap justify-content-around m-auto" style="width: 80%">
            <div class="floating-card col-12 col-md-3 p-3 mb-5 mb-md-0" style="background-image: linear-gradient(rgb(140,229,223), rgb(13,158,151));">
                <img src = "{{asset('images/Power.png')}} " alt="Felicidad" height="100px" width="150px"/>
                <p class="text-justify mt-3"><strong>Kangoo Power</strong> es un programa de entrenamiento de alta intensidad que combina movimientos cardiovasculares y de fuerza con el uso de botas Kangoo Jumps, lo que aumenta la <strong>intensidad del ejercicio y la quema de calorías.</strong></p>
            </div>
            <div class="floating-card col-12 col-md-3 p-3 mb-5 mb-md-0" style="background-image: linear-gradient(rgb(140,229,223), rgb(13,158,151));">
                <img src = "{{asset('images/Dance.png')}} " alt="Felicidad" height="100px" width="150px"/>
                <p class="text-justify mt-3"><strong>Kangoo Dance</strong> es un programa de fitness que utiliza las botas Kangoo Jumps para crear una experiencia de baile enérgica y divertida que combina movimientos de <strong>baile</strong> con <strong>saltos</strong> y <strong>rebotes.</strong></p>
            </div>
            <div class="floating-card col-12 col-md-3 p-3 mb-5 mb-md-0" style="background-image: linear-gradient(rgb(140,229,223), rgb(13,158,151));">
                <img src = "{{asset('images/Kick and punch.png')}} " alt="Felicidad" height="100px" width="150px"/>
                <p class="text-justify mt-3"><strong>Kangoo Kick & Punch</strong> es un programa de entrenamiento que combina movimientos de <strong>artes marciales</strong> con <strong>ejercicios cardiovasculares</strong> y de <strong>fuerza</strong> utilizando las botas Kangoo Jumps para un entrenamiento de <strong>bajo impacto</strong> y <strong>alta intensidad</strong> que ayuda a mejorar la <strong>coordinación</strong>, <strong>la fuerza</strong> y la <strong>resistencia cardiovascular.</strong></p>
            </div>
        </div>
    </div>
    <!--
    <div class="section text-center d-block color-white">
        <h1 class="mb-5">Experiencias</h1>
        <div class="floating-card bg-dark p-3 mb-3 text-left col-8 col-md-6 mx-auto color-white">
            <div class="float-left">
                <img class="rounded-circle" height="48px" width="48px" alt="user"
                     src="{{asset('images/avatars/1')}}">
            </div>
            <div class="user-info d-inline-block w-auto">
                <h6>Camilo Hernandez</h6>
                <div class="fullRating-container"
                     style="min-width: calc(64px); max-width: calc(100px); width: calc(10vw);"></div>
                <img id="emptyRating" alt="rating" src="{{asset('images/empty_rating.png')}}">
            </div>
            <div style="height: 2.5vw; min-height: 16px; max-height: 25px;"></div>
            <blockquote class="blockquote" style="font-size: 1rem">
                    <h5 class="mb-0">"Me encanta"</h5>
                    <footer class="blockquote-footer">{{now()}}</footer>
            </blockquote>
        </div>

        <div class="floating-card bg-dark p-3 mb-3 text-left col-8 col-md-6 mx-auto color-white">
            <div class="float-left">
                <img class="rounded-circle" height="48px" width="48px" alt="user"
                     src="{{asset('images/avatars/2')}}">
            </div>
            <div class="user-info d-inline-block w-auto">
                <h6>Camilo Hernandez</h6>
                <div class="fullRating-container"
                     style="min-width: calc(64px); max-width: calc(100px); width: calc(10vw);"></div>
                <img id="emptyRating" alt="rating" src="{{asset('images/empty_rating.png')}}">
            </div>
            <div style="height: 2.5vw; min-height: 16px; max-height: 25px;"></div>
            <blockquote class="blockquote" style="font-size: 1rem">
                <h5 class="mb-0">"Me encanta"</h5>
                <footer class="blockquote-footer">{{now()}}</footer>
            </blockquote>
        </div>
    </div>
    -->

    <!--Pure Chat component
    <div class="draggable purechat-button-expand" style="background-image: url(&quot;https://app.purechat.com/assets/spanish.c1fabaeb81f83ee3f3db.png&quot;) !important; background-size: cover; position: fixed; right: 0; bottom: 0; margin: 3vh; height: 80.55px !important; width: 90px !important; z-index: 9 !important;"></div>
    -->

    <footer style="margin: 0" class="footer-distributed">

        <div class="footer-left">

            <!--<h3><span>Fit</span>Flyr</h3>-->
            <img src="{{asset('images/brand/logo_letras_blanco.svg')}}" width="70%" height="70%">

            <!--<p class="footer-links">
                <a href="#quienesSomos">Quienes somos</a>
                ·
                <a href="#nuestoCompromiso">Nuestro compromiso</a>
                ·
                <a href="#mision">Mision</a>
                ·
                <a href="#valores">Valores</a>
                ·
                <a href="#equipo">Equipo de trabajo</a>
            </p>-->


            <p class="footer-company-name mt-4 d-none d-md-block">Desarrollado por: Educlick &copy; 2018</p>
            <p class="footer-company-name d-none d-md-block">322 243 42 96</p>
        </div>

        <div class="footer-center">

            <div>
                <a href="https://goo.gl/maps/xTk22i9AogNk5DZ66" target=”_blank”>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Av. Esperanza #75-25</span> Modelia, Bogotá</p>
                </a>
            </div>

            <div>
                <a href="https://api.whatsapp.com/send/?phone=573001395018&text=Hola,%20quisiera%20información%20sobre%20las%20clases%20de%20rebote&app_absent=0" target=”_blank”>
                    <i class="fa fa-phone"></i>
                    <p>300 139 50 18</p>
                </a>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:contacto@fitflyr.com">contacto@fitflyr.com</a></p>
            </div>

        </div>

        <div class="footer-right">
            <!--<a href="#"><i class="fab fa-facebook"></i></a>-->
            <a href="https://www.instagram.com/fitflyr/">
                <i class="fab fa-instagram" style="font-size: 25px"></i>
                <p>@fitflyr</p>
            </a>
        </div>

    </footer>

    <!--Script para que vuelva a la primer card cuando llegue a la última (slider ciclico)
    <script>
        $(document).ready(function() {
            var itemsPerSlide = 3;
            var totalItems = $(".carousel-item").length;
            if(itemsPerSlide >= totalItems){//se ocultan las flechas de mover el carrousel cuando tiene 3 o menos items para mostrar
                $("a[class^='carousel-control-']").css('display', 'none');
            }

            $("#myCarousel").on("slide.bs.carousel", function(e) {

                if(itemsPerSlide >= totalItems) {//solo se mueve el carousel cuando hay más de 3 cards
                    return false
                }

                var $e = $(e.relatedTarget);
                var idx = $e.index();
                console.log('indice: '+idx);
                if (idx >= totalItems - (itemsPerSlide - 1)) {
                    var it = itemsPerSlide - (totalItems - idx);
                    console.log('otro: '+it);
                    for (var i = 0; i < it; i++) {
                        // append slides to end
                        if (e.direction == "left") {
                            $(".carousel-item")
                                .eq(i)
                                .appendTo(".carousel-inner");
                        } else {
                            $(".carousel-item")
                                .eq(0)
                                .appendTo(".carousel-inner");
                        }
                    }
                    /*$(".media-slider").css('width', '100');*/
                }


            });
            /*$("#myCarousel").on("slid.bs.carousel", function(e) {
                $(".media-slider").css('width', '100%');
            });*/
        });
    </script>
    -->
    <!--subscribers
    <script type="text/javascript">
        var subscribersSiteId = 'cd602984-8642-4484-8a8b-431d84a5faf0';
    </script>
    <script type="text/javascript" src="https://cdn.subscribers.com/assets/subscribers.js"></script>
    -->
    <!--Floating button-->

    <div class="floating_button">
        <div class="chats">
            <a href="https://api.whatsapp.com/send/?phone=573001395018&text=Hola,%20quisiera%20información%20sobre%20las%20clases%20de%20rebote&app_absent=0" class="icon-whatsapp" target=”_blank”>
                <img class="icon" width="100%" height="100%" alt="whatsapp" src="{{asset('images/wathsapp_icon.png')}}">
            </a>
        </div>
    </div>

    <!--google analytics-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-128937544-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!--chat de soporte-->
        <!--Para que se dragable pero que no muestre el chat al finalizar el drag
            <script>
                $(function() {
                    $( ".draggable" ).draggable({
                        stop: function(event, ui) {
                            $('.purechat-expanded').attr('style', 'display: none!important');
                        }
                    });
                    $( ".draggable" ).click(function(){
                        $('.purechat-expanded').attr('style', 'display: ');
                    });
                });
            </script>
            <!--<script src="https://code.jquery.com/jquery-1.9.1.js"></script> Si se deja se daña el slider y al parecer ya está en otro lugar o no se necesita porque se quita y aún así funciona correctamente el draggable.
            <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!--fin Para que se dragable pero que no muestre el chat al finalizar el drag

        <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '1e110dc0-e024-4b2b-a871-4e07f3dec0d3', f: true }); done = true; } }; })();</script>
    <!--fin chat de soporte-->
    </body>
</html>
