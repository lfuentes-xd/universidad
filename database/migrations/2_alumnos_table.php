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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("matricula");
            $table->string("nombre");
            $table->string("apellidoP");
            $table->string("apellidoM");
            $table->Char("Sexo");
            $table->integer("edad");
            $table->string("foto");
            $table->unsignedBigInteger("carrera");
            $table->timestamps();
            $table->foreign("carrera")->references("id")->on("carreras");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
