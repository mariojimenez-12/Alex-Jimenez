@extends('layouts.app')

@section('botones')
    <a href="{{ route('admin') }}" class="btn btn-outline-primary mt-3">
        <i class="bi bi-arrow-left-circle-fill"></i>
        Regresar
    </a>
    <a href="{{ route('portafolio.create') }}" class="btn btn-outline-primary mt-3">
        <i class="bi bi-folder-plus"></i>
        Crear
    </a>
@endsection

@section('content')

    @php
        $resultado = $_GET['register_portfolio'] ?? null;
    @endphp

    @if($resultado === '1')
        <div class="container mt-2">
            <div class="col-md-5">
                <p class="alert alert-success text-center w-100" role="alert">Página registrada exitosamente</p>
            </div>
        </div>
        @elseif($resultado === '2')
        <div class="container mt-2">
            <div class="col-md-5">
                <p class="alert alert-success text-center w-100" role="alert">Página actualizada exitosamente</p>
            </div>
        </div>
        @elseif($resultado === '3')
        <div class="container mt-2">
            <div class="col-md-5">
                <p class="alert alert-success text-center w-100" role="alert">Página eliminada exitosamente</p>
            </div>
        </div>
    @endif

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Url</th>
                    <th>Creado el</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($portafolios as $portafolio)
                    <tr>
                        <td>{{ $portafolio->id }}</td>
                        <td>{{ $portafolio->titulo}}</td>
                        <td>
                            <img src="/storage/{{ $portafolio->imagen }}" alt="Imagen web" class="img-fluid">
                        </td>
                        <td>{!! $portafolio->descripcion !!}</td>
                        <td>
                            {{ $portafolio->url }}
                        </td>
                        <td>{{ $portafolio->created_at }}</td>
                        <td>
                            <form action="{{ route('portafolio.delete', ['portafolio' => $portafolio->id]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger w-100" value="Eliminar">
                            </form>
                            <a href="{{ route('portafolio.edit', ['portafolio' => $portafolio->id]) }}" class="btn btn-warning text-white mt-1">Actualizar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection