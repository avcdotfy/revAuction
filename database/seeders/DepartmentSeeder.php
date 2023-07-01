<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 5; $i++) {
            Department::create([
                'code' => 'D00' . $i,
                'name' => 'IT' . $i,
                'user_id' => 1,
                'company_id' => 1,
                'is_active' => true,
            ]);
        }
    }
}
