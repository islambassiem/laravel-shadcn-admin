<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\EmployeeJobTitle;
use Illuminate\Database\Seeder;

class EmployeeJobTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeJobTitle::factory(10)->create();
    }
}
