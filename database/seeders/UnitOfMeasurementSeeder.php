<?php

namespace Database\Seeders;

use App\Models\UnitOfMeasure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitOfMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (UOMs as $key => $value) {
            UnitOfMeasure::create([
                'name' => $value,
                'code' => $value,
                'user_id' => 1,
                'is_active' => true
            ]);
        }
    }
}
