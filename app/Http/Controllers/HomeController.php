<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $leidos = Libro::orderby('lecturas', 'desc')->get();
        $publicados = Libro::orderby('publicacion', 'desc')->get();
        return view('home', compact('leidos'), compact('publicados'));
    }
}
