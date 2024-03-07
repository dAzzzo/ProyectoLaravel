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
         //ID_Pedido Fecha ID_Cliente Total Estado
         Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            
            $table->date('Fecha');
            $table->integer('ID_Cliente');
            $table->decimal('Total');
            $table->string('Estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
