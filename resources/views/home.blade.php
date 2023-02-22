@extends('layouts.plantilla')

@section('title', 'ILoveBooks')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-3">
        <h1>¡Bienvenido/a a ILoveBooks,<br>hogar de mil historias!</h1>
    </div>
    <div class="container-fluid d-flex flex-column mb-5">
        <div class="container-fluid my-2"><h1>Top de cada género</h1><hr></div>
        <div class="container-fluid bg-success d-flex justify-content-around">
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
        </div>
        <div class="container-fluid bg-success d-flex justify-content-around mb-4">
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column mb-5">
        <div class="container-fluid my-2"><h1>Últimos libros añadidos</h1><hr></div>
        <div class="container-fluid bg-success d-flex justify-content-around">
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
        </div>
        <div class="container-fluid bg-success d-flex justify-content-around mb-4">
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
            <div class="container-fluid bg-danger m-4">
                Libro
            </div>
        </div>
    </div>
</div>
@endsection