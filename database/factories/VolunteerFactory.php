<?php

namespace Database\Factories;

use App\Models\Government;
use App\Models\Sector;
use App\Models\Specialtie;
use App\Models\Unit;
use App\Models\Volunteer;
use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Volunteer>
 */
class VolunteerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $birthDate = fake()->dateTimeBetween('-45 years', '-18 years');
        $enlistmentDate = fake()->dateTimeBetween('-5 years', 'now');
        $dischargeDate = fake()->boolean(30)
            ? fake()->dateTimeBetween('now', '+3 years')
            : null;

        return [
            'military_number' => fake()->unique()->numerify('######'),

            'rank' => fake()->randomElement([
                'جندي',
                'عريف',
                'رقيب',
                'رقيب أول',
                'مساعد',
            ]),

            'name' => fake('ar_EG')->name(),

            'sector_id' => Sector::inRandomOrder()->value('id'),
            'unit_id' => Unit::inRandomOrder()->value('id'),
            'weapon_id' => Weapon::inRandomOrder()->value('id'),
            'specialization_id' => Specialtie::inRandomOrder()->value('id'),
            'governorate_id' => Government::inRandomOrder()->value('id'),

            'category' => fake()->randomElement([
                'مقاتل',
                'خدمات',
                'فني',
                'إداري',
            ]),

            'enlistment_date' => $enlistmentDate,
            'discharge_date' => $dischargeDate,
            'birth_date' => $birthDate,

            'national_id' => fake()->numerify('##############'),

            'driving_license_grade' => fake()->randomElement([
                'أولى',
                'ثانية',
                'ثالثة',
                null,
            ]),

            'qualification' => fake()->randomElement([
                'مؤهل متوسط',
                'فوق متوسط',
                'عالي',
            ]),

            'job_before_service' => fake()->jobTitle(),

            'marital_status' => fake()->randomElement([
                'أعزب',
                'متزوج',
            ]),

            'male_children_count' => fake()->numberBetween(0, 4),
            'female_children_count' => fake()->numberBetween(0, 4),

            'mother_name' => fake('ar_EG')->name('female'),
            'mother_job' => fake()->jobTitle(),

            'father_job' => fake()->jobTitle(),

            'phone_number' => fake()->numerify('01#########'),

            'nearest_relative' => fake('ar_EG')->name(),

            'nearest_relative_phone' => fake()->numerify('01#########'),

            'address' => fake('ar_EG')->address(),

            'height' => fake()->randomFloat(2, 150, 200),
            'weight' => fake()->randomFloat(2, 50, 120),

            'supply_date' => fake()->date(),

            'notes' => fake()->optional()->sentence(),

            'attendance' => fake()->boolean(90),
        ];
    }
}