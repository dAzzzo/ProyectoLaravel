<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User> 
 */
class ValoracionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Puntuacion' => $this->faker->numberBetween(1, 5), // Suponiendo que la puntuación sea entre 1 y 5
            'Comentario' => $this->faker->text(200), // Un texto ficticio como comentario
            'Fecha' => $this->faker->date(), // Una fecha ficticia
            'UsuarioID' => $this->faker->numberBetween(1, 100), // Suponiendo que haya 100 usuarios
        ];
    }
}
