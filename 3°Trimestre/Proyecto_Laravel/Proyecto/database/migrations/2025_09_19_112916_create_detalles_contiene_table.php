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
        Schema::create('detalles_contiene', function (Blueprint $table) {
            $table->unsignedBigInteger('id_alquiler')->index('id_alquiler');
            $table->unsignedBigInteger('id_producto')->index('id_producto');
            $table->unsignedInteger('cantidad_producto');
            $table->decimal('valor_producto_alquiler', 10);
            $table->string('descripccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_contiene');
    }
};
