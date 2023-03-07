<?php

namespace Database\Seeders;

use App\Models\Lectura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Lector 1
        $reserva1 = new Lectura();
        $reserva1->idLibro = 3;
        $reserva1->nombreLibro = "Marfil";
        $reserva1->idUsuario = 1;
        $reserva1->save();

        $reserva2 = new Lectura();
        $reserva2->idLibro = 5;
        $reserva2->nombreLibro = "Viaje al centro de la tierra";
        $reserva2->idUsuario = 1;
        $reserva2->save();

        $reserva3 = new Lectura();
        $reserva3->idLibro = 7;
        $reserva3->nombreLibro = "Ready Player One";
        $reserva3->idUsuario = 1;
        $reserva3->save();

        //Lector 2
        $reserva4 = new Lectura();
        $reserva4->idLibro = 12;
        $reserva4->nombreLibro = "Bajo la misma estrella";
        $reserva4->idUsuario = 2;
        $reserva4->save();

        $reserva5 = new Lectura();
        $reserva5->idLibro = 14;
        $reserva5->nombreLibro = "Invisible";
        $reserva5->idUsuario = 2;
        $reserva5->save();

        $reserva6 = new Lectura();
        $reserva6->idLibro = 16;
        $reserva6->nombreLibro = "De sangre y cenizas";
        $reserva6->idUsuario = 2;
        $reserva6->save();

        $reserva7 = new Lectura();
        $reserva7->idLibro = 17;
        $reserva7->nombreLibro = "El nombre del viento";
        $reserva7->idUsuario = 2;
        $reserva7->save();

        //Lector 3
        $reserva8 = new Lectura();
        $reserva8->idLibro = 8;
        $reserva8->nombreLibro = "Gideon la novena";
        $reserva8->idUsuario = 3;
        $reserva8->save();

        $reserva9 = new Lectura();
        $reserva9->idLibro = 10;
        $reserva9->nombreLibro = "Soy leyenda";
        $reserva9->idUsuario = 3;
        $reserva9->save();

        $reserva10 = new Lectura();
        $reserva10->idLibro = 11;
        $reserva10->nombreLibro = "Al final mueren los dos";
        $reserva10->idUsuario = 3;
        $reserva10->save();
    }
}
