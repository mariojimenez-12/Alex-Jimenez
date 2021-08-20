@extends('layouts.app')


@section('content')

    <div class="container">
        <form action="{{ route('portafolio.update', ['portafolio' => $portafolio->id]) }}" method="POST" enctype="multipart/form-data" class="col-md-6">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $portafolio->titulo }}">
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

            @if($portafolio)
                <img src="/storage/{{ $portafolio->imagen }}" width="200" height="100" alt="Imagen web">
            @endif

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control">{!! $portafolio->descripcion !!}</textarea>
                @error('descripcion')
                    <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="url">url</label>
                <input type="text" class="form-control" name="url" id="url" value="{{ $portafolio->url }}">
                @error('url')
                    <span class="invalid-feedback d-block mb-2 mt-0" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>


            <input type="submit" class="btn btn-primary" value="Actualizar página">
        </form>
    </div>

@endsection