<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Employee;
use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\Salary\Revision;
use Illuminate\Database\Seeder;

class SalaryRevisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employeeIds = Employee::query()
            ->pluck('id');

        $typeIds = LookupValue::query()
            ->revisions()
            ->pluck('id');

        Revision::factory(100)->create([
            'employee_id' => fn () => $employeeIds->random(),
            'revision_type_id' => fn () => $typeIds->random(),
        ]);
    }
}
