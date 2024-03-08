<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User> 
 */

class ClientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    public function definition()
    {
        return [
            'Nombre' => $this->faker->name,
            'Email' => $this->faker->unique()->safeEmail,
            'Direccion' => $this->faker->address,
            'Telefono' => $this->faker->numberBetween(600000000, 699999999),
        ];
    }
}