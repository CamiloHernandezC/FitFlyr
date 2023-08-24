<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>@yield('title') - @lang('general.AppName')</title>
    <base href="/">

    <!--This is loading before boostrap because a conflit with bootstrap tooltip (https://stackoverflow.com/questions/13731400/jqueryui-tooltips-are-competing-with-twitter-bootstrap)
     but I think is being used in solicitud servicio and complete profile-->
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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

    <link rel="stylesheet" href="{{asset('css/general.css')}}">

    <script src="{{asset('js/general.js')}}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--brand-name-->
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <!--Scrollbar -->
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #555;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: black;
        }


        .dropdown-menu::-webkit-scrollbar {
            width: 0;
        }
    </style>
    <!--Fin Scrollbar -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FGK3JF6PWV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FGK3JF6PWV');
    </script>

    @auth
        <!--notificaciones-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="userId" content="{{Auth::user()->id}}">
    @endauth

    @stack('head-content')
</head>
<body>
    <div id="app">
        <div id="top-navbar" class="navbar navbar-dark fixed-top">
            <a class="navbar-brand position-absolute" style="width: 60px" href="@auth{{route('home', ['user'=> Auth::user()->slug])}}@else # @endauth">
                <img width="100%" alt="logo" src="{{asset('images/brand/Imago_principal.png')}}">
            </a>
            <!--
            <form id="buscarEntrenadores-form" action="{{ route('buscarEntrenadores') }}" method="GET">
                <div class=" m-auto">
                    <i style="padding-top: 15px" class="color-white mr-1 fas fa-search"></i>
                    <input type="text" class="search-input" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>-->
            <!-- Brand/logo -->
            <div class="links ml-auto">
                <!--
                <a class="banner-icon" href="#">
                    <img width="100%" alt="calendar" src="{{asset('images/calendar.png')}}">
                </a>
                <a class="banner-icon" href="#">
                    <img width="100%" alt="stats" src="{{asset('images/stats.png')}}">
                </a>
                -->
                <a class="d-none d-md-inline-block" href="{{route('blogs')}}">
                    Blogs
                </a>

                @auth
                    <notification class="cursor-pointer" v-bind:unread_notifications="unread_notifications" v-bind:notifications="notifications"></notification>

                    <div class="dropdown d-inline-block">
                        <img class="rounded-circle user-icon ml-3 cursor-pointer" alt="user" src="{{asset('images/avatars/'.Auth::user()->foto)}}?{{time()}}" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right floating-card bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('home', ['user'=> Auth::user()->slug])}}">Home</a>
                            <a class="dropdown-item d-block d-md-none" href="{{route('blogs')}}">
                                Blogs
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    <div class="d-none d-md-inline-block links">
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registro</a>
                    </div>
                    <div class="dropdown d-inline-block d-inline-block d-md-none">
                        <span class="navbar-toggler-icon cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>

                        <div class="dropdown-menu dropdown-menu-right floating-card bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('blogs')}}">Blogs</a>
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Registro</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    @feature('dark_theme', false)
        <div class="full"></div><!--para el background de la imagen-->
    @endfeature

    <div class="container-fluid w-100">
        @if(session('msg'))
            <div class=" alert-{{session('msg_level')}} ">
                <p>{{session('msg')}}</p>
            </div>
            @php(\Illuminate\Support\Facades\Session::forget('msg'))
        @endif
        @yield('content')
    </div>

    @auth
        <script src="{{asset('js/app.js')}}"></script>
    @endauth

    @stack('scripts')

    <!--Navbar color effect
    <script>
        $(window).on("scroll", function() {
            $("#top-navbar").css("backgroundColor", 'rgba(0, 0, 0, '+$(window).scrollTop());
        });
    </script>
    -->

    <!--activación de los tooltip-->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <!--subscribers
    <script type="text/javascript">
        var subscribersSiteId = 'cd602984-8642-4484-8a8b-431d84a5faf0';
    </script>
    <script type="text/javascript" src="https://cdn.subscribers.com/assets/subscribers.js"></script>
    -->

    <!--google analytics-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-128937544-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>
