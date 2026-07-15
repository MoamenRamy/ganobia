<?php

namespace Database\Factories;

use App\Models\AttachmentPlace;
use App\Models\Government;
use App\Models\Place;
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
        $maleChildren = fake()->numberBetween(0, 5);
        $femaleChildren = fake()->numberBetween(0, 5);

        return [

            // البيانات الأساسية
            'military_number' => fake()->unique()->numerify('##########'),
            'rank' => fake()->randomElement([
                'جندي',
                'عريف',
                'رقيب',
                'رقيب أول'
            ]),
            'name' => fake('ar_EG')->name(),

            // الوحدة والقطاع
            'unit_id' => Unit::query()->inRandomOrder()->value('id'),
            'sector_id' => Sector::query()->inRandomOrder()->value('id'),

            // الدفعة والتواريخ
            'batch_number' => fake()->numerify('دفعة ###'),

            'enlistment_date' => fake()->date(),
            'high_salary_date' => fake()->date(),
            'current_rank_date' => fake()->date(),
            'southern_region_join_date' => fake()->date(),
            'unit_join_date' => fake()->date(),

            // المؤهلات
            'educational_qualification' => fake()->randomElement([
                'ابتدائي',
                'إعدادي',
                'ثانوي',
                'دبلوم',
                'بكالوريوس',
                'ليسانس'
            ]),

            'weapon_id' => Weapon::query()->inRandomOrder()->value('id'),

            'category' => fake()->randomElement([
                'صف',
                'سائق',
                'فني'
            ]),

            'specialization_id' => Specialtie::query()->inRandomOrder()->value('id'),

            'qualified' => fake()->boolean(),
            'not_qualified' => fake()->boolean(),

            // الجزاءات
            'detention_count' => fake()->numberBetween(0, 10),
            'imprisonment_count' => fake()->numberBetween(0, 5),
            'court_cases_count' => fake()->numberBetween(0, 3),

            // التليفونات
            'phone_number' => fake()->numerify('010########'),
            'relative_phone_number' => fake()->numerify('011########'),

            // البيانات الشخصية
            'national_id' => fake()->numerify('##############'),
            'birth_date' => fake()->date(),

            'marital_status' => fake()->randomElement([
                'أعزب',
                'متزوج',
                'مطلق',
                'أرمل'
            ]),

            'children_count' => $maleChildren + $femaleChildren,
            'male_children_count' => $maleChildren,
            'female_children_count' => $femaleChildren,

            // العنوان
            'village' => fake('ar_EG')->city(),
            'center' => fake('ar_EG')->city(),

            'governorate_id' => Government::query()
                ->inRandomOrder()
                ->value('id'),

            // القياسات
            'weight' => fake()->randomFloat(2, 55, 110),
            'height' => fake()->randomFloat(2, 155, 195),
            'weight_difference' => fake()->randomFloat(2, -20, 20),

            // بيانات الخدمة
            'attachment_id' => Place::query()->inRandomOrder()->value('id'),

            'previous_units' => fake()->sentence(),

            'travel' => fake()->randomElement([
                'لا يوجد',
                'مأمورية',
                'إجازة',
                'خارج البلاد'
            ]),

            // طبي
            'medical_status' => fake()->randomElement([
                'لائق',
                'محدود لائق',
                'تحت العلاج'
            ]),

            // ملاحظات
            'notes' => fake()->paragraph(),

            // المراجع
            'reviewer' => fake('ar_EG')->name(),
        ];
    }
}
