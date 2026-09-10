<?php

namespace Database\Seeders;

use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\PayslipEarning;
use App\Models\PayrollPayslip;
use Illuminate\Database\Seeder;

class PayslipEarningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payslipIds = PayrollPayslip::query()->pluck('id');
        $earningIds = LookupValue::query()->payrollEarnings()->pluck('id');

        PayslipEarning::factory(300)->create([
            'payslip_id' => fn () => $payslipIds->random(),
            'item_type' => fn () => $earningIds->random(),
        ]);
    }
}
