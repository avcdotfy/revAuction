<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'name' => 'Admin', 'password' => Hash::make('Admin'),
            'email' => 'dotfyauction@gmail.com',
            'user_type' => "ADMIN",
            'company_id' => 1,
            'role_id' => 1
        ]);
    }
}
