<?php

namespace Database\Seeders;

use App\Models\Soldier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoldierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Soldier::factory()->count(3000)->create();
    }
}
