<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //ID_Producto Nombre Descripcion Precio Stock
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            
            $table->string('Nombre');
            $table->longText('Descripcion');
            $table->decimal('Precio');
            $table->integer('Stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
