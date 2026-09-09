<?php

namespace Database\Seeders;

use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\PayslipItem;
use App\Models\PayrollPayslip;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class PayrollPayslipItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payslipIds = PayrollPayslip::query()->pluck('id');
        $earningIds = LookupValue::query()->payrollEarnings()->pluck('id');
        $deductionIds = LookupValue::query()->payrollDeductions()->pluck('id');

        PayslipItem::factory(300)->create([
            'payslip_id' => $payslipIds->random(),
            'item_type' => Arr::random([...$earningIds, ...$deductionIds]),
        ]);
    }
}
