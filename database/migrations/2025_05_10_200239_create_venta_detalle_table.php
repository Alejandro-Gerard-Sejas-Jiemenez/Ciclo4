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
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->id('id_ventaDetalle');
            $table->decimal('precio', 10, 2);
            $table->decimal('cantidad', 10, 2);
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();
            //llave foranea
            $table->foreignId('id_venta')
                ->constrained('ventas', 'id_venta')
                ->onDelete('cascade');
            $table->foreignId('id_producto')
                ->constrained('productos', 'id_producto')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_detalle');
    }
};
