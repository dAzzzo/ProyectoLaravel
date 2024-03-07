<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User> 
 */
class AlmacenesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'producto_ID_Producto' => $this->faker->numberBetween(1, 50), // Asumiendo que tienes al menos 50 productos distintos para referenciar
            'Cantidad' => $this->faker->numberBetween(10, 100), // Una cantidad ficticia de productos en el almacén
            'Direccion' => $this->faker->address, // Una dirección ficticia
            'Nombre' => $this->faker->word, // Un nombre ficticio para el almacén
        ];
    }
}
