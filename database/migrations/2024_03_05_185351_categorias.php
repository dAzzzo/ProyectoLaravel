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
        //ID_Categoria	Nombre	Descripcion	Icono Activo
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            
            $table->string('Nombre');
            $table->longText('Descripcion');
            $table->string('Icono');
            $table->boolean('Activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
