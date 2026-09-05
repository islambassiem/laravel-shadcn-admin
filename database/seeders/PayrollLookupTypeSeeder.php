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
        ];

        foreach ($types as $type) {
            LookupType::query()->create($type);
        }
    }
}
