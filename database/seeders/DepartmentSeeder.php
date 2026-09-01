<?php

namespace Database\Seeders;

use App\Models\Lookups\Department;
use App\Services\DataSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataSeeder::run(
            filename: 'departments.json',
            table: 'lookup_departments'
        );
    }
}
