<?php

declare(strict_types=1);

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
            LookupTypeSeeder::class,
            LookupValueSeeder::class,
            DepartmentSeeder::class,
            CountrySeeder::class,
            EmployeeCategorySeeder::class,
            EmployeeSeeder::class,
            QualificationSpecialityCategorySeeder::class,
            QualificationSpecialitySeeder::class,
            QualificationIncludedSpecializationSeeder::class,
        ]);
    }
}
