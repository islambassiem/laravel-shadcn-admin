<?php

namespace Database\Seeders;

use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\PayslipDeduction;
use App\Models\PayrollPayslip;
use Illuminate\Database\Seeder;

class PayslipDeductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payslipIds = PayrollPayslip::query()->pluck('id');
        $deductionIds = LookupValue::query()->payrollDeductions()->pluck('id');

        PayslipDeduction::factory(300)->create([
            'payslip_id' => fn () => $payslipIds->random(),
            'item_type' => fn () => $deductionIds->random(),
        ]);
    }
}
