<?php

namespace Database\Seeders;

use App\Models\Permissiongroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (PERMISSIONS_GROUPs as $key => $g) {
            Permissiongroup::create([
                'name' => $g
            ]);
        }
    }
}
