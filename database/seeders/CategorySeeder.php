<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 11; $i++) {
            Category::create([
                'code' => 'CAT_CODE' . $i,
                'name' => 'CAT_NAME' . $i,
                'terms_condition' => 'TC' . $i,
                'item_time_trigger' => 1,
                'time_gap_between_each_item' => 1,
                'last_minute_closing_time_increment' => 1,
                'is_active' => 1,
                'user_id' => 1,
                'company_id' => 1,
                'status' => 1,
            ]);
        }
    }
}
