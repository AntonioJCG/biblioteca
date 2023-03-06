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
        <div class="row container-fluid bg-light p-3">
            @foreach ($libros as $libro)
            <div class="libro container-fluid text-center p-3 col-4">
                <p class="titulos mb-3">{{$libro->nombre}}</p>
                <div class="banner-img container-fluid d-flex justify-content-center">
                    <a href="{{route('biblioteca.index')}}"><img src="{{$libro->imagen}}" alt=""></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection