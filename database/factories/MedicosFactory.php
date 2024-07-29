<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicos>
 */
class MedicosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_medico' => fake()->firstName(),
            'apellido_medico' => fake()->lastName(),
            'fk_tipo_documento' => random_int(1, 2),
            'numero_documento' => random_int(100000, 99999999),
            'telefono_medico' => fake()->phoneNumber(),
            'correo_medico' => fake()->email(),
            'fk_especialidad_medico' => random_int(1, 5),
        ];
    }
}
