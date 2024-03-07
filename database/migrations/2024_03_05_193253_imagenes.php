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
        //ID_Imagen ID_Producto Nombre_Archivo Descripcion Fecha_Subida
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id();
            
            $table->integer('ID_Producto');
            $table->string('Nombre_Archivo');
            $table->longText('Descripcion');
            $table->date('Fecha_Subida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes');
    }
};
