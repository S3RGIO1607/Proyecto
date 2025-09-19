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
        Schema::table('detalle_servicio', function (Blueprint $table) {
            $table->foreign(['id_servicio'], 'detalle_servicio_ibfk_1')->references(['id_servicio'])->on('servicio')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_alquiler'], 'detalle_servicio_ibfk_2')->references(['id_alquiler'])->on('alquiler')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_servicio', function (Blueprint $table) {
            $table->dropForeign('detalle_servicio_ibfk_1');
            $table->dropForeign('detalle_servicio_ibfk_2');
        });
    }
};
