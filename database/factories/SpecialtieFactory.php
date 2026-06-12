<?php

namespace Database\Factories;

use App\Models\Specialtie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Specialtie>
 */
class SpecialtieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->jobTitle(),
        ];
    }
}
