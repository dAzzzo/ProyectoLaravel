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
        //ID_Almacen producto_ID_Producto Cantidad Direccion Nombre
        Schema::create('almacenes', function (Blueprint $table) {
            $table->id();

            $table->integer('producto_ID_Producto');
            $table->integer('Cantidad');
            $table->longText('Direccion');
            $table->string('Nombre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('almacenes');
    }
};
