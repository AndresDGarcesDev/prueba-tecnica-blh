<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estadoUsuario = [
            'Activo',
            'Inactivo',
        ];

        foreach ($estadoUsuario as  $item) {
            DB::table('estado_pacientes')->insert([
                'descripcion_estado' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
