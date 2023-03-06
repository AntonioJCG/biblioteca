<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('biblioteca.index', compact('libros'));
    }

    public function show(Request $texto)
    {
        $buscado = $texto->texto;
        $libros = Libro::where('nombre', 'LIKE', '%'.$buscado.'%')->get();
        return view('biblioteca.show', compact('libros'));
    }
}
