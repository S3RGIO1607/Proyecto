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
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->unsignedBigInteger('numero_documento')->index('numero_documento');
            $table->string('nombre');
            $table->string('correo');
            $table->string('contrasena');
            $table->string('direccion');
            $table->string('telefono', 20);
            $table->enum('nivel_educativo', ['Bachiller', 'Tecnico', 'Tecnologo', 'Profesional'])->nullable();
            $table->string('referencia_personal')->nullable();
            $table->string('telefono_referencia_personal', 20)->nullable();
            $table->string('eps')->nullable();
            $table->enum('tipo_usuario', ['Administrador', 'Cliente', 'Sup_bodega', 'Gerente']);
            $table->enum('estado', ['A', 'I'])->nullable()->default('A');
            $table->unsignedBigInteger('registrado_por')->nullable()->index('registrado_por');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
