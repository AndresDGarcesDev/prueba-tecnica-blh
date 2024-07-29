<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pacientes>
 */
class PacientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @return array<int, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres_paciente' => fake()->firstName(),
            'apellidos_paciente' => fake()->lastName(),
            'fk_tipo_documento' => random_int(1, 5),
            'numero_documento' => random_int(100000, 99999999),
            'telefono_contacto' => fake()->phoneNumber(),
            'email_contacto' => fake()->email(),
            'fk_estado_paciente' => random_int(1, 2),
        ];
    }
}
