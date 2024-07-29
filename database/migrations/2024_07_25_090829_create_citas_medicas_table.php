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
        Schema::create('citas_medicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_pacientes')
                ->constrained('pacientes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('fk_medicos')
                ->constrained('medicos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('horario_cita');
            $table->char('asistencia_paciente')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas_medicas');
    }
};
