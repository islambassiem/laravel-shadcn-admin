<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Payroll\Lookups\LookupType;
use Illuminate\Database\Seeder;

class PayrollLookupTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name_en' => 'Salary Component Type',
                'name_ar' => 'نوع مكون الراتب',
                'code' => 'salary_comonent_type',
                'sort_order' => 1,
            ],
            [
                'name_en' => 'Salary Revision Types',
                'name_ar' => 'انواع تعديلات الراتب',
                'code' => 'salary_revision_types',
                'sort_order' => 2,
            ],
            [
                'name_en' => 'Banks',
                'name_ar' => 'البنوك',
                'code' => 'banks',
                'sort_order' => 3,
            ],
            [
                'name_en' => 'Payroll Status',
                'name_ar' => 'حالة الراتب',
                'code' => 'payroll_status',
                'sort_order' => 4,
            ],
            [
                'name_en' => 'Payroll Period Runs',
                'name_ar' => 'مرات دورة الراتب',
                'code' => 'payroll_period_runs',
                'sort_order' => 5,
            ],
            [
                'name_en' => 'Payroll Run Type',
                'name_ar' => 'نوع تشغيل مسير الرواتب',
                'code' => 'payroll_run_type',
                'sort_order' => 6,
            ],
            [
                'name_en' => 'Payroll Run Status',
                'name_ar' => 'حالة تشغيل مسير الرواتب',
                'code' => 'payroll_run_status',
                'sort_order' => 7,
            ],
            [
                'name_en' => 'Payroll Payslip Status',
                'name_ar' => '',
                'code' => 'payroll_payslip_statues',
                'sort_order' => 8,
            ],
            [
                'name_en' => 'Payroll Payslip Earnings',
                'name_ar' => 'المدفوعات',
                'code' => 'payroll_payslip_earnings',
                'sort_order' => 9,
            ],
            [
                'name_en' => 'Payroll Payslip Deductions',
                'name_ar' => 'الخصومات',
                'code' => 'payroll_payslip_deductions',
                'sort_order' => 10,
            ],
        ];

        foreach ($types as $type) {
            LookupType::query()->create($type);
        }
    }
}
