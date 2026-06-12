<?php

namespace Database\Seeders;

use App\Models\Specialtie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialtie::factory()->count(100)->create();
    }
}
