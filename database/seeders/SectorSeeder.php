<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            'اللواء 117 مش ميكا مقل',
            'اللواء 166 مش ميكا مقل',
            'اللواء 305 مش ميكا مقل',
            'حرس الحدود',
            'قيادة المنطقة الجنوبية العسكرية',
        ];

        foreach ($sectors as $sector) {
            Sector::firstOrCreate([
                'name' => $sector,
            ]);
        }
    }
}