<?php

namespace App\Http\Controllers;

use App\Models\Lectura;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __invoke()
    {
        $usuario = Usuario::where('id', '1')->get();
        $libros = Lectura::where('idUsuario', '1')->get();
        return view('perfil', compact('usuario'), compact('libros'));
    }
}
