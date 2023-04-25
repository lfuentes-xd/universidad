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
        Schema::create('materia_alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("alumno");
            $table->unsignedBigInteger("materia");
            $table->integer("calificacion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_alumnos');
    }
};
