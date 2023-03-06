@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Biblioteca')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Buscador de libros</h1>
    </div>
    <div class="container-fluid mb-5">
        <form action="{{route('biblioteca.show')}}" method="get">
            <div class="input-group d-flex justify-content-center mb-5">
                <div class="form-outline">
                  <input type="search" id="buscador" name="texto" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">
                  Buscar
                </button>
            </div>
        </form>
        <div class="row container-fluid">
            <ul>
                @foreach ($libros as $libro)
                    <li>{{$libro->nombre}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection