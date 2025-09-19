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
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id_producto');
            $table->string('nombre_producto')->index('nombre_producto');
            $table->unsignedTinyInteger('existencia');
            $table->string('descripcion');
            $table->decimal('precio_compra', 10);
            $table->decimal('precio_alquiler', 10);
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->binary('imagen');
            $table->unsignedBigInteger('id_usuario')->index('id_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
