<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CompanySeeder::class,
            DepartmentSeeder::class,
            PermissionSeeder::class,
            RolePermissionSeeder::class,
            RoleSeeder::class,
            UnitOfMeasurementSeeder::class,
            RegionSeeder::class,
            CountrySeeder::class,
            EventmodeSeeder::class,
            StateSeeder::class,
            CategorySeeder::class,
            AdminSeeder::class
        ]);
    }
}
