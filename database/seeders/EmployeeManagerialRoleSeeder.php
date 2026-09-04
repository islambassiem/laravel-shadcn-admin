<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\EmployeeManagerialRole;
use Illuminate\Database\Seeder;

class EmployeeManagerialRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeManagerialRole::factory(10)->create();
    }
}
