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
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_medico');
            $table->string('apellido_medico');
            $table->foreignId('fk_tipo_documento')
                ->constrained('tipo_documentos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('numero_documento')->unique();
            $table->string('telefono_medico')->unique();
            $table->string('correo_medico')->unique();
            $table->foreignId('fk_especialidad_medico')
                ->constrained('especialidad_medicos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
