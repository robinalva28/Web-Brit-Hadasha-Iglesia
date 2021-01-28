{{--TO RUN REACT, HAVE TO WRITE THIS COMMAND: npm run watch-poll--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>@yield('title')</title>
</head>
<body>

<div class="bg-image"></div>
<header>
    {{--BARRA DE NAV--}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            {{--LOGO--}}
            <a class="navbar-brand" href="/"><img height="40vh" src="{{asset('img/Transparentepeq.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Nuestra casa</a>
                    </li>

                {{--===================================================================--}}
                {{--NAV SECCIÓN NO LOGUEADOS--}}
                {{--===================================================================--}}
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mirol">Mi Servicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/mirol">Perfil</a>
                            </li>



                        @else

                    <li class="nav-item">
                        <a class="nav-link" href="/login">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contacto</a>
                    </li>

                    @endauth

                    @endif
                    {{--===================================================================--}}
                    {{--NAV SECCIÓN LOGUEADOS--}}
                    {{--===================================================================--}}


                </ul>
                <span class="navbar-text">
        Brit Hadasha | Iglesia
      </span>
            </div>
        </div>
    </nav>

    @if(Auth::user())
    {{--BARAR INTERNA DE NAVEGACION--}}
     {{--   <ul class="nav nav-tabs">
            <li class="nav-item submenu">
                <a class="nav-link active" href="/mirol">
                    Mi Servicio</a>
            </li>
            <li class="nav-item submenu">
                <a class="nav-link" href="/agenda">
                    Agenda</a>
            </li>
            <li class="nav-item submenu">
                <a class="nav-link" href="/galeria">
                    Galeria</a>
            </li>

            <li class="nav-item submenu">
                <a class="nav-link" href="/miperfil">
                    Mi perfil</a>
            </li>
        </ul>--}}


    @endif

</header>


@yield('content')



<!-- FOOTER -->
<footer class="page-footer font-small blue mt-auto">
    ​
    <!-- Footer Links -->
    <div id="footer" class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">Brit Hadasha</h5>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">mapa sitio</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="/">Nuestra casa</a>
                    </li>
                   {{-- <li>
                        <a href="/faq">FAQ</a>
                    </li>--}}

                    <li>
                        <a href="/login">Login</a>
                    </li>
                    <li>
                        <a href="/register">Registro</a>
                    </li>
                    <li>
                        <a href="/register">Contacto</a>
                    </li>

                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Contacto</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!"><i class="fab fa-facebook-f" ></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="fab fa-instagram" ></i></a>
                    </li>
                    <li>
                        <i class="far fa-envelope" > <a href="mailto:brithadashaiglesia@gmail.com">brithadashaiglesia@gmail.com</a></i>
                        ​
                    </li>
                    <li>
                        <i class="fas fa-phone" > 11-1234-5678</i>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020

    </div>
    <!-- Copyright -->

</footer>
{{--app.js contiene el linkeo al React--}}
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>


