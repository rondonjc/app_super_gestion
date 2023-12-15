<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContacto>
 */
class SiteContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->name(),
            'telefono'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'motivo_contacto'=>fake()->numberBetween(1,3),
            'mensaje'=>fake()->text(200),
        ];
    }
}
