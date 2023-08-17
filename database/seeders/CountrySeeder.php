<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 2; $i++) {
            Country::create([
                'name' => 'Country' . $i,
                'code' => 'COUN' . $i,
                'company_id' => 1,
                'user_id' => 1,
                'is_active' => 1,
                'description' => 'Description'
            ]);
        }
    }
}
