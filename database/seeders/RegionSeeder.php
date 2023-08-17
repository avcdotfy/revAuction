<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 2; $i++) {
            Region::create([
                'name' => 'Region' . $i,
                'description' => 'Region' . $i . ' description',
                'user_id' => 1,
                'is_active' => true,
            ]);
        }
    }
}
