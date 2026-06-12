<?php

namespace Database\Seeders;

use App\Models\Government;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $governorates = [
            'القاهرة',
            'الجيزة',
            'الإسكندرية',
            'الدقهلية',
            'البحر الأحمر',
            'البحيرة',
            'الفيوم',
            'الغربية',
            'الإسماعيلية',
            'المنوفية',
            'المنيا',
            'القليوبية',
            'الوادي الجديد',
            'السويس',
            'أسوان',
            'أسيوط',
            'بني سويف',
            'بورسعيد',
            'دمياط',
            'الشرقية',
            'جنوب سيناء',
            'كفر الشيخ',
            'مطروح',
            'الأقصر',
            'قنا',
            'شمال سيناء',
            'سوهاج',
        ];

        foreach ($governorates as $governorate) {
            Government::firstOrCreate([
                'name' => $governorate,
            ]);
        }
    }
}
