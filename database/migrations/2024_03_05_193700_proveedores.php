<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //ID_Proveedor Nombre Contacto Direccion Pais
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('Contacto');
            $table->longText('Descripcion');
            $table->string('Pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
