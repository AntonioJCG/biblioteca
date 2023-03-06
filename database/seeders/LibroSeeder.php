<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libro1 = new Libro();
        $libro1->nombre = "";
        $libro1->autor = "";
        $libro1->descripcion = "";
        $libro1->genero = "";
        $libro1->publicacion = "";
        $libro1->imagen = "";
        $libro1->reservas = 0;
        $libro1->save();

        $libro2 = new Libro();
        $libro2->nombre = "";
        $libro2->autor = "";
        $libro2->descripcion = "";
        $libro2->genero = "";
        $libro2->publicacion = "";
        $libro2->imagen = "";
        $libro2->reservas = 0;
        $libro2->save();
    }
}
