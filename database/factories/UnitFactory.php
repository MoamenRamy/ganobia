<?php

namespace Database\Factories;

use App\Models\Sector;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       {
            $moratab = fake()->numberBetween(50, 500);
            $seasa = fake()->numberBetween(30, $moratab);

            $soldiers = fake()->numberBetween(10, $seasa);
            $volunteers = fake()->numberBetween(5, $seasa - $soldiers);

            $total = $soldiers + $volunteers;

            return [
                'name' => fake()->unique()->bothify('Unit-###'),
                'sector_id' => Sector::inRandomOrder()->value('id'),

                'moratab' => $moratab,
                'seasa' => $seasa,

                'soldiers' => $soldiers,
                'volunteers' => $volunteers,

                'total' => $total,

                'nesbat_estkmal_seasa' => round(($total / max($seasa, 1)) * 100),

                'nesbat_estkmal_moratab' => round(($total / max($moratab, 1)) * 100),
            ];
        }
    }
}
