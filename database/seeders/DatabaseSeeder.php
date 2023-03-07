<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() //php artisan migrate:fresh --seed
    {
        $this->call(LibroSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(LecturaSeeder::class);
    }
}
