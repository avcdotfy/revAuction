<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'CompanyName',
            'app_name' => 'Company App Name',
            'web_url' => '127.0.0.1',
            'user_id' => 1,
        ]);
    }
}
