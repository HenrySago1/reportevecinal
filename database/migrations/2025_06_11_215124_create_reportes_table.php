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
        Schema::create('reportes', function (Blueprint $table) {
    $table->id();
    $table->string('titulo');
    $table->text('descripcion');
    $table->string('tipo');
    $table->string('imagen')->nullable();
    $table->enum('estado', ['Nuevo', 'En proceso', 'Resuelto'])->default('Nuevo');
    $table->double('latitud')->nullable();
    $table->double('longitud')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
