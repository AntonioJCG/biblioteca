@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Actualizar')

@section('content')
<div class="principal form bg-light rounded px-4">
    <div class="container-fluid text-center my-5">
        <h2>Actualiza un libro</h2>
    </div>
    <div class="form container-fluid mb-5">
        <form action="{{Route('metodo.edit')}}" method="get">
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="number" class="form-control" id="id">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" id="autor">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion">
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <input type="text" class="form-control" id="genero">
            </div>
            <div class="mb-3">
                <label for="publicacion" class="form-label">Fecha publicación</label>
                <input type="date" class="form-control" id="publicacion">
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="imagen">
            </div>
            <div class="container-fluid d-flex justify-content-around">
                <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
        </form>
    </div>
</div>
@endsection