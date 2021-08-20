@extends('welcome')

@section('section')

<div class="mt-5">.</div>

<section id="trabajos" class="container mt-5 mb-5">
    <h1>Mi portafolio</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @foreach($portafolios as $portafolio)
            <div class="col p-0">
                <div class="card m-1">
                    <img src="/storage/{{ $portafolio->imagen }}" alt="Imagen app" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $portafolio->titulo }}</h5>
                        <p class="card-text">{{ $portafolio->descripcion }}</p>
                        <a href="{{ $portafolio->url }}" target="_blank" class="btn btn-outline-secondary">VER DEMO</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection