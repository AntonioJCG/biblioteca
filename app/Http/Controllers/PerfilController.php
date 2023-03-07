<?php

namespace App\Http\Controllers;

use App\Models\Lectura;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function showUsuario()
    {
        $usuario = Usuario::where('id', '4')->get();
        $libros = Lectura::where('idUsuario', '4')->get();
        if ($usuario[0]->admin == true) {
            return view('perfilAdmin', compact('usuario'), compact('libros'));
        } else {
            return view('perfil', compact('usuario'), compact('libros'));
        }
    }
}
