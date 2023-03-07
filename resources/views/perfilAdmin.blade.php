@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Perfil')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Perfil</h1>
    </div>
    <div class="row container-fluid mb-5">
        <div class="container-fluid d-flex flex-column align-items-center p-3 col-3">
            <h3 class="mb-4">Datos del usuario</h3>
            <p>Usuario: {{$usuario[0]->nombre}}</p>
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
        <div class="container-fluid d-flex flex-column align-items-center p-3 col-2">
            <h3 class="mb-4">Administración</h3>
            <form action="{{Route('admin.create')}}" method="get">
                <button type="submit" class="btn btn-success mb-3">
                    Agregar libro
                </button>
            </form>
            <form action="{{Route('admin.update')}}" method="get" class="container-fluid d-flex flex-column align-items-center">
                <div class="mb-3">
                    <label for="id" class="form-label">Id</label>
                    <input type="number" class="form-control" id="id" name="id">
                </div>
                <button type="submit" class="btn btn-primary mb-3">
                    Modificar libro
                </button>
            </form>
            <form action="{{Route('admin.delete')}}" method="get">
                <button type="submit" class="btn btn-danger mb-3">
                    Borrar libro
                </button>
            </form>
        </div>
    </div>
</div>
@endsection