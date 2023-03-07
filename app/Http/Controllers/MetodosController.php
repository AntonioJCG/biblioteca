<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class MetodosController extends Controller
{
    public function store(Request $request)
    {
        $libro = new Libro();
        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->descripcion = $request->descripcion;
        $libro->genero = $request->genero;
        $libro->publicacion = $request->publicacion;
        $libro->imagen = $request->imagen;
        $libro->lecturas = 0;
        $libro->save();
        return view('metodo.create');
    }

    public function update(Request $request, Libro $libro)
    {
        $libro->nombre = $request->nombre;
        $libro->autor = $request->autor;
        $libro->descripcion = $request->descripcion;
        $libro->genero = $request->genero;
        $libro->publicacion = $request->publicacion;
        $libro->imagen = $request->imagen;
        $libro->lecturas = $request->lecturas;
        $libro->save();
        return view('metodo.update');
    }

    public function destroy(Libro $id)
    {
        $id->delete();
        return view('metodo.delete');
    }
}
