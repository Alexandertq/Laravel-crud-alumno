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

            $table->id('alumno_id');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->date('fnacimiento')->nullable();
            $table->integer('dni');
            $table->string('genero', 10);
            $table->string('carrera', 50);
            $table->string('email');
            $table->integer('telefono');
            
            $table->timestamps();
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
