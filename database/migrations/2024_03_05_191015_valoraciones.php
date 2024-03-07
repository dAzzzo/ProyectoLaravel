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
        //ID_Valoracion Puntuacion Comentario Fecha UsuarioID
        Schema::create('valoraciones', function (Blueprint $table) {
            $table->id();
            
            $table->integer('Puntuacion');
            $table->string('Comentario');
            $table->date('Fecha');
            $table->integer('UsuarioID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valoraciones');
    }
};
