<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class librosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
        protected $model = Libros::class;

    public function definition()
    {
        return [
            'id'=> $this->faker->uuid(),
            'nombre'=> $this->faker->,
            'autor'=> $this->faker->,
            'descripcion'=> $this->faker->,
            'genero'=> $this->faker->,
            'publicacion'=> $this->faker->,
            'url'=> $this->faker->,
            'reservas'=> $this->faker->
        ];
    }
}
