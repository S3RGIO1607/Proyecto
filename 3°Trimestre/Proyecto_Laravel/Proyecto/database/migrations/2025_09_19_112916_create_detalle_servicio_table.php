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
        Schema::create('detalle_servicio', function (Blueprint $table) {
            $table->unsignedTinyInteger('id_servicio')->index('id_servicio');
            $table->unsignedBigInteger('id_alquiler')->index('id_alquiler');
            $table->unsignedTinyInteger('cantidad');
            $table->decimal('valor_servicio', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_servicio');
    }
};
