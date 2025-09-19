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
        Schema::table('detalle_paquete', function (Blueprint $table) {
            $table->foreign(['id_paquete'], 'detalle_paquete_ibfk_1')->references(['id_paquete'])->on('paquete')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_producto'], 'detalle_paquete_ibfk_2')->references(['id_producto'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalle_paquete', function (Blueprint $table) {
            $table->dropForeign('detalle_paquete_ibfk_1');
            $table->dropForeign('detalle_paquete_ibfk_2');
        });
    }
};
