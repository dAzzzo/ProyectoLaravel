<?php

namespace Database\Factories;

use App\Models\Producto; // Asegúrate de importar correctamente tu modelo ProductoModel
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->words(3, true), // Genera un nombre de producto compuesto por 3 palabras.
            'Descripcion' => $this->faker->sentence(10), // Genera una descripción ficticia para el producto.
            'Precio' => $this->faker->randomFloat(2, 1, 1000), // Genera un precio ficticio para el producto, con 2 decimales, entre 1 y 1000.
            'Stock' => $this->faker->numberBetween(0, 100), // Genera un valor ficticio para el stock, entre 0 y 100 unidades.
        ];
    }
}
