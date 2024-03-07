<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User> 
 */
class PedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Fecha' => $this->faker->date(), // Una fecha ficticia
            'ID_Cliente' => $this->faker->numberBetween(1, 100), // Suponiendo que existan 100 clientes, genera un ID ficticio
            'Total' => $this->faker->randomFloat(2, 10, 1000), // Un total ficticio para el pedido, con 2 decimales, entre 10 y 1000
            'Estado' => $this->faker->randomElement(['Pendiente', 'Completado', 'Cancelado']), // Un estado ficticio para el pedido
        ];
    }
}
