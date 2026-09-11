<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Employee;
use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\PayrollRun;
use App\Models\Payroll\Salary\SalaryRevision;
use App\Models\PayrollPayslip;
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
        $statusIds = LookupValue::query()->payslipStatuses()->pluck('id');

        PayrollPayslip::factory(300)->create([
            'run_id' => $runIds->random(),
            'employee_id' => $employeeIds->random(),
            'salary_revision_id' => $revisionIds->random(),
            'status_id' => $statusIds->random(),
        ]);
    }
}
