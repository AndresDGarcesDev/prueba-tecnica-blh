<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidadMedico = [
            'Médico General',
            'Odontólogo',
            'Psicólogo',
            'Fisioterapeuta',
            'Otorrinolaringologo',
        ];

        foreach ($especialidadMedico as $item) {
            DB::table('especialidad_medicos')->insert([
                'descripcion_especialidad' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
