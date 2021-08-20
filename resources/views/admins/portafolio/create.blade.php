@extends('layouts.app')

@section('botones')
    <a href="{{ route('portafolio.index') }}" class="btn btn-outline-primary mt-3">
        <i class="bi bi-arrow-left-circle-fill"></i>
        Regresar
    </a>
@endsection

@section('content')

    <div class="container">
        <form action="{{ route('portafolio.store') }}" method="POST" enctype="multipart/form-data" class="col-md-6">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo">
                @error('titulo')
                    <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control" name="imagen" id="imagen">
                @error('imagen')
                    <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                @error('descripcion')
                    <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">url</label>
                <input type="text" class="form-control" name="url" id="url">
                @error('url')
                    <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>


            <input type="submit" class="btn btn-primary" value="Registrar página">
        </form>
    </div>

@endsection