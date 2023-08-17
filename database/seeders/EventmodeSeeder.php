<?php

namespace Database\Seeders;

use App\Models\Eventmode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventmodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i < 3; $i++) {
            Eventmode::create([
                'mode' => 'MODE' . $i,
                'is_active' => 1,
                'user_id' => 1,
                'company_id' => 1,
            ]);
        }
    }
}
