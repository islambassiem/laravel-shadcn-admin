<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Employee;
use App\Models\Lookup\SalaryRevision;
use App\Models\Payroll\PayrollPayslip;
use App\Models\Payroll\PayrollRun;
use Illuminate\Database\Seeder;

class PayrollPayslipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $runIds = PayrollRun::query()->pluck('id');
        $employeeIds = Employee::query()->pluck('id');
        $revisionIds = SalaryRevision::query()->pluck('id');

        PayrollPayslip::factory(300)->create([
            'run_id' => fn () => $runIds->random(),
            'employee_id' => fn () => $employeeIds->random(),
            'salary_revision_id' => fn () => $revisionIds->random(),
        ]);
    }
}
