<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipoDocumento = [
            'Cédula de ciudadanía',
            'Cédula de extranjería',
            'PPT',
            'Pasaporte',
            'Tarjeta de identidad',
        ];

        foreach ($tipoDocumento as $item) {
            DB::table('tipo_documentos')->insert([
                'descripcion_tipo_documento' => $item,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
