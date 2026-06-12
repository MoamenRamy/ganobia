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
            'Infantry',
            'Artillery',
            'Armored',
            'Signals',
            'Engineering',
            'Air Defense',
            'Military Police',
            'Medical Corps',
            'Logistics',
            'Reconnaissance',
        ];

        foreach ($weapons as $weapon) {
            Weapon::firstOrCreate([
                'name' => $weapon,
            ]);
        }
    }
}
