<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $weapons = [
            'المهندسين',
            'اجهزة قيادة',
            'الاستطلاع',
            'الاسلحة و الذخيرة',
            'الاشارة',
            'الاشغال العسكرية',
            'الاطفاء',
            'التعيينات',
            'الحرب الالكترونية',
            'الحرب الكيميائية',
            'الخدمات البيطرية',
            'الخدمات الطبية',
            'الدفاع الجوى',
            'السكرتارية العسكرية',
            'الشرطة العسكرية',
            'الشئون المعنوية',
            'المدرعات',
            'المدفعية',
            'المركبات',
            'المساحة',
            'المشاه',
            'المطبوعات و النشر',
            'المهمات',
            'النقل',
            'الوقود',
            'تشغيل حواسب ادارة نظم المعلومات',
            'دفاع جوى شروط خاصة',
        ];

        foreach ($weapons as $weapon) {
            Weapon::firstOrCreate([
                'name' => $weapon,
            ]);
        }
    }
}
