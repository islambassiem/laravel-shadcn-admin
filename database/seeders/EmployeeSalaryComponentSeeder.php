<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Employee;
use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\Salary\EmployeeSalaryComponent;
use App\Models\Payroll\Salary\Revision;
use Illuminate\Database\Seeder;

class EmployeeSalaryComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employeeIds = Employee::query()
            ->pluck('id');

        $componentIds = LookupValue::query()
            ->components()
            ->pluck('id');

        $revisionIds = Revision::query()
            ->pluck('id');

        EmployeeSalaryComponent::factory(100)->create([
            'employee_id' => fn () => $employeeIds->random(),
            'component_id' => fn () => $componentIds->random(),
            'revision_id' => fn () => $revisionIds->random(),
        ]);
    }
}
