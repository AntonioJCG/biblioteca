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

    public function show(Request $request, Libro $libro)
    {
        $libro = Libro::where('nombre', 'like', '%'.$libro.'%')->get();
        return view('biblioteca.show', compact('libro'));
    }
}
