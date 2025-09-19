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
        Schema::create('alquiler', function (Blueprint $table) {
            $table->bigIncrements('id_alquiler');
            $table->date('fecha_evento');
            $table->decimal('abono', 10);
            $table->decimal('saldo', 10);
            $table->decimal('valor_total', 10);
            $table->date('fecha_devolucion');
            $table->unsignedTinyInteger('id_paquete')->index('id_paquete');
            $table->unsignedBigInteger('id_usuario')->index('id_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquiler');
    }
};
