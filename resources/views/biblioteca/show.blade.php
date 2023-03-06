@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Biblioteca')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-5">
        <h1>Resultado de la búsqueda</h1>
    </div>
    <div class="container-fluid mb-5">
        <ul>
            @foreach ($libros as $libro)
                <li>{{$libro->nombre}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection