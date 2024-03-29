<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User> */
class CategoriasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->word,
            'Descripcion' => $this->faker->paragraph,
            'Icono' => $this->faker->imageUrl(64, 64),
            'Activo' => $this->faker->boolean,
        ];
    }
}
