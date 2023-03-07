@extends('layouts.plantilla')

@section('title', 'ILoveBooks - Borrar')

@section('content')
<div class="principal form bg-light rounded px-4">
    <div class="container-fluid text-center my-5">
        <h2>Borra un libro</h2>
    </div>
    <div class="form container-fluid mb-5">
        <form action="{{Route('metodo.destroy', $id[0]->id)}}" method="POST">
            @csrf
            @method('delete')
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="number" class="form-control" id="id" name="id">
            </div>
            <div class="container-fluid d-flex justify-content-around">
                <button type="submit" class="btn btn-danger">Borrar</button>
            </div>
        </form>
    </div>
</div>
@endsection