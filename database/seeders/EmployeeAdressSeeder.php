<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Employee;
use App\Models\Employees\EmployeeAdress;
use Illuminate\Database\Seeder;

class EmployeeAdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeAdress::factory(100)->create([
            'employee_id' => fn () => Employee::query()->inRandomOrder()->value('id'),
        ]);
    }
}
