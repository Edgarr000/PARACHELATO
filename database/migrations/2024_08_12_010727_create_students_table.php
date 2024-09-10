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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('rne');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('sexo');
            $table->date('fechanac');
            $table->string('colegio');
            $table->string('curso');
            $table->string('carrera');
            $table->string('jornada');
            $table->smallInteger('seccion');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
