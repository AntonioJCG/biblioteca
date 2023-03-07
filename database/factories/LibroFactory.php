<?php

namespace Database\Factories;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
        protected $model = Libro::class;

    public function definition()
    {
        return [
            'id'=> $this->faker->numerify(100),
            'nombre'=> $this->faker->name(),
            'autor'=> $this->faker->name(),
            'descripcion'=> $this->faker->paragraph(),
            'genero'=> $this->faker->name(),
            'publicacion'=> $this->faker->date('2014-05-24'),
            'imagen'=> $this->faker->name(),
            'lecturas'=> $this->faker->numerify(12)
        ];
    }
}

//Libro::factory(1)->create();