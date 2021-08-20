<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600;700&display=swap" rel="stylesheet">
        <title>Mario Jimenez Developer</title>
        <!-- iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="bg-primary p-1 fixed-top">
            <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
                        <div>
                            <a href="https://www.facebook.com/AJmnez/" class="m-1" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/mario.jjmnz/" class="m-1" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/mario-alejandro-jimenez-862837218/" class="m-1" target="_blank">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="https://twitter.com/marioche041096?s=09" class="m-1" target="_blank">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </div>
                        <button class="navbar-toggler active" data-target="#menu" data-toggle="collapse" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
            
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="navbar-item scroll">
                                    <a href="/" class="nav-link active">Inicio</a>
                                </li>
                                <li class="navbar-item scroll">
                                    <a href="#acercade" class="nav-link active">Acerca de</a>
                                </li>
                                <!-- <li class="navbar-item">
                                    <a href="#" class="nav-link active">Blog</a>
                                </li> -->
                                <li class="navbar-item">
                                    <a href="/portafolio" class="nav-link active">Mis trabajos</a>
                                </li>
                                <li class="navbar-item scroll">
                                    <a href="#contacto" class="nav-link active">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
            </div>
        </div>

        @yield('section')

        <footer class="bg-primary py-3">
            <div class="container">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a class="m-4 text-white" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="m-4 text-white" href="#">Acerca de</a></li>
                    <!-- <li class="nav-item"><a class="m-4 text-white" href="#">Blog</a></li> -->
                    <li class="nav-item"><a class="m-4 text-white" href="#">Contacto</a></li>
                    <li class="nav-item"><a class="m-4 text-white" href="#">Mis trabajos</a></li>
                </ul>
                <p class="text-center text-white">&copy; Mario Jimenez Developer</p>
            </div>
        </footer>

        <div class="absolute">
            <a href="https://api.whatsapp.com/send?phone=523314187367&text=%20Hola%20que%20tal%2C%20me%20gustar%C3%ADa%20contactarte%20sobre%20trabajo" target="_blank" class="center">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>

        @yield('scripts')
        <script src="/js/app.js"></script>
    </body>
    </html>