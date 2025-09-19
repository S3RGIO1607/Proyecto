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
        Schema::create('paquete', function (Blueprint $table) {
            $table->tinyIncrements('id_paquete');
            $table->string('tipo_evento');
            $table->string('nombre');
            $table->string('descripcion');
            $table->enum('capacidad', ['20-40', '40-60', '60-80'])->nullable();
            $table->decimal('precio', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquete');
    }
};
