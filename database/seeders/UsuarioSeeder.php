<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario1 = new Usuario();
        $usuario1->nombre = "Antonio Cabrera";
        $usuario1->email = "antoniojcab@gmail.com";
        $usuario1->clave = "12345";
        $usuario1->admin = false;
        $usuario1->save();

        $usuario2 = new Usuario();
        $usuario2->nombre = "Manuel Gomez";
        $usuario2->email = "manugom@gmail.com";
        $usuario2->clave = "54321";
        $usuario2->admin = false;
        $usuario2->save();

        $usuario3 = new Usuario();
        $usuario3->nombre = "Daniel Barrera";
        $usuario3->email = "danibb@gmail.com";
        $usuario3->clave = "112233";
        $usuario3->admin = false;
        $usuario3->save();

        $usuario4 = new Usuario();
        $usuario4->nombre = "Juanjo Sanchez";
        $usuario4->email = "juanjosan@gmail.com";
        $usuario4->clave = "admin";
        $usuario4->admin = true;
        $usuario4->save();
    }
}
