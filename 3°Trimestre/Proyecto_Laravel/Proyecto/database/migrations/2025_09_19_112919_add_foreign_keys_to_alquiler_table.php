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
        Schema::table('alquiler', function (Blueprint $table) {
            $table->foreign(['id_paquete'], 'alquiler_ibfk_1')->references(['id_paquete'])->on('paquete')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_usuario'], 'alquiler_ibfk_2')->references(['id_usuario'])->on('usuario')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alquiler', function (Blueprint $table) {
            $table->dropForeign('alquiler_ibfk_1');
            $table->dropForeign('alquiler_ibfk_2');
        });
    }
};
