<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User> 
 */
class ProveedoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->company, // Un nombre de compañía ficticio
            'Contacto' => $this->faker->name, // Un nombre completo ficticio para el contacto
            'Descripcion' => $this->faker->paragraph, // Un párrafo ficticio para la descripción
            'Pais' => $this->faker->country, // Un país ficticio
        ];
    }
}
