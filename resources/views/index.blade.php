@extends('welcome')

@section('section')
    <div class="mt-5">.</div>

    @php
        $resultado = $_GET['resultado'] ?? null;
    @endphp

    @if($resultado === '1')
        <div class="container mt-2">
            <div class="col-md-5">
                <p class="alert alert-success text-center w-100" role="alert">E-mail enviado correctamente</p>
            </div>
        </div>
    @endif

<div id="acercade" class="container mt-5 mt-md-3">
    <h1 class="text-center">Mario Alejandro Jimenez</h1>
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col p-3 p-md-5">
            <img src="/images/facebook.jpg" class="img-fluid rounded-circle" alt="">
        </div>
        <div class="col mt-0 mt-md-5">
            <p>Nacido en Guadalajara, Jalisco, México.</p>
            <p>Apasionado por la programación y sus buenas prácticas, actualmente estudiando una Ingeniería en Software en la UNEDL(Universidad Enrique Dìaz de Leòn) con 1 año de experiencia, mi meta es profesionalizarme en el campo y poder llevar más allá mis conocimientos y mis habilidades, mi fuerte es el back-end y puedo seguir mejorando mis habilidades en el front-end.</p>
            <p>Me gusta mucho apoyar a cualquiera que me pregunte sus dudas, aún estoy decidiendo si ser instructor en el campo, si deseas incluirme en tus proyectos adelante, no dudes en contactarme</p>
        </div>
    </div>
</div>

<main class="container mt-3">
    <h2 class="mb-3">Esto es un poco de lo que estoy estudiando y actualizando</h2>
    <div class="linea"></div>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 p-3">
        
        <div class="col mt-1 mb-1">
            <div class="card shadow p-3">
                <img src="/images/css.png" alt="Imagen CSS" class="card-img-top">

                <div class="card-body">
                    <h4 class="cart-title text-center font-weight-bold">CSS</h4>
                </div>
            </div>
        </div>

        <div class="col mt-1 mb-1">
            <div class="card shadow p-3">
                <img src="/images/git.png" alt="Imagen GIT" class="card-img-top">

                <div class="card-body">
                    <h4 class="cart-title text-center font-weight-bold">Git</h4>
                </div>
            </div>
        </div>

        <div class="col mt-1 mb-1">
            <div class="card shadow p-3">
                <img src="/images/html.png" alt="Imagen HTML" class="card-img-top">

                <div class="card-body">
                    <h4 class="cart-title text-center font-weight-bold">HTML5</h4>
                </div>
            </div>
        </div>

        <div class="col mt-1 mb-1">
            <div class="card shadow p-3">
                <img src="/images/javascript.png" alt="Imagen javascript" class="card-img-top">

                <div class="card-body">
                    <h4 class="cart-title text-center font-weight-bold">JS</h4>
                </div>
            </div>
        </div>

        <div class="col mt-1 mb-1">
            <div class="card shadow p-3">
                <img src="/images/mysql.png" alt="Imagen MySql" class="card-img-top">

                <div class="card-body">
                    <h4 class="cart-title text-center font-weight-bold">MySql</h4>
                </div>
            </div>
        </div>

        <div class="col mt-1 mb-1">
            <div class="card shadow p-3">
                <img src="/images/php.png" alt="Imagen PHP" class="card-img-top">

                <div class="card-body">
                    <h4 class="cart-title text-center font-weight-bold">php</h4>
                </div>
            </div>
        </div>
        
    </div>
</main>

<section id="contacto" class="container mb-5">
    <h2>Contactame</h2>
    <form id="enviar-mail" action="{{ route('contacto.store') }}" method="POST">
        @csrf
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="form-group mt-3 mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre">
                    @error('nombre')
                        <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3 mb-3">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" id="apellido">
                    @error('apellido')
                        <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3 mb-3">
                    <label for="correo">E-mail</label>
                    <input class="form-control @error('correo') is-invalid @enderror" type="correo" name="correo" id="correo">
                    @error('correo')
                        <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
            <div class="col form-group">
                <label for="mensaje">Mensaje</label>
                <textarea class="form-control @error('mensaje') is-invalid @enderror" name="mensaje" id="mensaje"></textarea>
                @error('mensaje')
                    <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror

                <input type="submit" value="Enviar" id="enviar" class="btn btn-dark mt-3 w-100">
            </div>
        </div>
    </form>
</section>

@endsection

@section('scripts')
    <script src="/js/script.js"></script>
@endsection