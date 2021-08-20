@extends('layouts.app')

@section('botones')
    <a href="{{ route('portafolio.index') }}" class="btn btn-outline-primary mt-3">
        <i class="bi bi-archive"></i>
        Ver portafolios
    </a>
@endsection

@section('content')

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Enviado el:</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emails as $email)
                <tr>
                    <td>{{ $email->id }}</td>
                    <td>{{ $email->nombre . " " . $email->apellido }}</td>
                    <td>{{ $email->correo }}</td>
                    <td>{!! $email->mensaje !!}</td>
                    <td>{{ $email->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="col-12 mt-4 justify-content-center d-flex">
        {{ $emails->links() }}
    </div>
</div>

@endsection
