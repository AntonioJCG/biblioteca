@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Biblioteca')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Buscador de libros</h1>
    </div>
    <div class="container-fluid mb-5">
        
        <form action="{{route('biblioteca.index')}}" method="get">
            <div class="input-group d-flex justify-content-center">
                <div class="form-outline">
                  <input type="search" id="buscador" name="libro" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">
                  Buscar
                </button>
            </div>
            <div>
                <ul>
                    @foreach ($libros as $libro)
                        <li>{{$libro->nombre}}</li>
                    @endforeach
                </ul>
            </div>
        </form>
    </div>
</div>
@endsection