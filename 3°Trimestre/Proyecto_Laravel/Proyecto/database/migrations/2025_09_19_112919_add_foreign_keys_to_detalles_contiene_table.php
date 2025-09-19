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
        Schema::table('detalles_contiene', function (Blueprint $table) {
            $table->foreign(['id_alquiler'], 'detalles_contiene_ibfk_1')->references(['id_alquiler'])->on('alquiler')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_producto'], 'detalles_contiene_ibfk_2')->references(['id_producto'])->on('producto')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detalles_contiene', function (Blueprint $table) {
            $table->dropForeign('detalles_contiene_ibfk_1');
            $table->dropForeign('detalles_contiene_ibfk_2');
        });
    }
};
