<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tablas complementos de información.
        $this->call(TipoDocumentoSeeder::class);
        $this->call(EstadoPacienteSeeder::class);
        $this->call(EspecialidadSeeder::class);

        // Tablas información de usuarios, pacientes y medicos.
        $this->call(UserSeeder::class);
        $this->call(PacientesSeeder::class);
        $this->call(MedicosSeeder::class);

        // Tabla citas médicas.
        $this->call(CitasMedicasSeeder::class);
    }
}
