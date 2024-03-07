<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Son las dos cosas que vamos a usar 
        \App\Models\Almacenes::factory(10)->create();
        \App\Models\Categorias::factory(10)->create();
        \App\Models\Clientes::factory(10)->create();
        \App\Models\Imagenes::factory(10)->create();
        \App\Models\Pedidos::factory(10)->create();
        \App\Models\Productos::factory(10)->create();
        \App\Models\Proveedores::factory(10)->create();
        \App\Models\Valoraciones::factory(10)->create();
    }
}
