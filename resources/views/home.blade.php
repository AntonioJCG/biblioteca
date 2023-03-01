@extends('layouts.plantilla')

@section('title', 'ILoveBooks')

@section('content')
<div class="principal container bg-light rounded mx-3">
    <div class="container-fluid text-center my-3">
        <h1>¡Bienvenido/a a ILoveBooks,<br>hogar de mil historias!</h1>
    </div>
    <div class="container-fluid d-flex flex-column mb-5">
        <div class="container-fluid my-2"><h1>Top de cada género</h1><hr></div>
        <div class="container-fluid d-flex justify-content-around">
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column mb-5">
        <div class="container-fluid my-2"><h1>Últimos libros publicados</h1><hr></div>
        <div class="container-fluid d-flex justify-content-around">
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex justify-content-around">
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
            <div class="libro container-fluid d-flex flex-column m-2 p-2 rounded">
                <div class="container-fluid text-center">
                    <p class="titulo-libro">De sangre y cenizas</p>
                </div>
                <div class="container-fluid d-flex justify-content-center">
                    <img src="../public/imgs/sangre.jpg" alt="" class="row container-fluid col-lg-10 col-md-12">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection