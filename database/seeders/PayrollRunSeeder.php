<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Employee;
use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\PayrollPeriod;
use App\Models\Payroll\PayrollRun;
use Illuminate\Database\Seeder;

class PayrollRunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periodIds = PayrollPeriod::query()->pluck('id');
        $typeIds = LookupValue::query()->runTypes()->pluck('id');
        $employeeIds = Employee::query()->pluck('id');
        $statusIds = LookupValue::query()->runStatuses()->pluck('id');

        PayrollRun::factory(30)->create([
            'period_id' => $periodIds->random(),
            'run_type' => $typeIds->random(),
            'processed_by' => $employeeIds->random(),
            'approved_by' => $employeeIds->random(),
            'status_id' => $statusIds->random(),
        ]);
    }
}
