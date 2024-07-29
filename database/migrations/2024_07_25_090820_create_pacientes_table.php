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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres_paciente');
            $table->string('apellidos_paciente');
            $table->foreignId('fk_tipo_documento')
                ->constrained('tipo_documentos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('numero_documento')->unique();
            $table->string('telefono_contacto')->unique();
            $table->string('email_contacto')->unique();
            $table->foreignId('fk_estado_paciente')
                ->constrained('estado_pacientes')
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
        Schema::dropIfExists('pacientes');
    }
};
