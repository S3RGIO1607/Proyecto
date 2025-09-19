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
        Schema::create('detalle_paquete', function (Blueprint $table) {
            $table->unsignedTinyInteger('id_paquete')->index('id_paquete');
            $table->unsignedBigInteger('id_producto')->index('id_producto');
            $table->unsignedTinyInteger('cant_producto_paquete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_paquete');
    }
};
