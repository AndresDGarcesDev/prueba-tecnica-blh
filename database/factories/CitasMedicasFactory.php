<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CitasMedicas>
 */
class CitasMedicasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fk_pacientes' => random_int(1, 5),
            'fk_medicos' => random_int(1, 5),
            'horario_cita' => fake()->dateTime(),
            'asistencia_paciente' => fake()->randomElement(['Si', 'No']),
        ];
    }
}
