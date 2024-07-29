<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'User Admin',
            'email' => 'prueba.admin@blh.com',
            'password' => 'prueba.admin'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User Asignación Citas',
            'email' => 'prueba.asignacioncitas@blh.com',
            'password' => 'prueba.asignacioncitas'
        ]);

        \App\Models\User::factory(10)->create();
    }
}
