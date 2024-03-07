<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User> 
 */
class ImagenesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID_Producto' => $this->faker->numberBetween(1, 50), // Asumiendo que hay 50 productos para asignar imágenes
            'Nombre_Archivo' => $this->faker->lexify('imagen_????.jpg'), // Genera un nombre de archivo ficticio
            'Descripcion' => $this->faker->sentence, // Una descripción corta ficticia
            'Fecha_Subida' => $this->faker->date(), // Una fecha ficticia de subida
        ];
    }
}
