@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Perfil')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Perfil</h1>
    </div>
    <div class="row container-fluid mb-5">
        <div class="container-fluid d-flex flex-column align-items-center p-3 col-4">
            <h3 class="mb-4">Datos del usuario</h3>
            <p>Nombre de usuario: {{$usuario[0]->nombre}}</p>
            <p>Email: {{$usuario[0]->email}}</p>
            <p>Clave de usuario: {{$usuario[0]->clave}}</p>
        </div>
        <div class="container-fluid d-flex flex-column align-items-center p-3 col-6">
            <h3 class="mb-4">Libros leídos</h3>
            <table class="table table-light table-hover text-center align-middle">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Género</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($libros as $libro)
                    <tr>
                        <td>{{$libro->nombreLibro}}</td>
                        <td>{{$libro->autorLibro}}</td>
                        <td>{{$libro->generoLibro}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection