<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 3; $i++) {
            State::create([
                'name' => 'State' . $i,
                'code' => 'StCode' . $i,
                'description' => 'Description' . $i,
                'user_id' => 1,
                'company_id' => 1,
                'country_id' => random_int(1, 2),
                'is_active' => 1,
            ]);
        }
    }
}
