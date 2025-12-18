<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') // ID del usuario que hizo el pedido
                  ->constrained()      // Hace referencia a la tabla users (clave foránea)
                  ->onDelete('cascade'); // Borra los pedidos si el usuario se elimina
            $table->string('status')->default('pending'); // Estado del pedido
            $table->decimal('total_price', 10, 2);        // Precio total
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
