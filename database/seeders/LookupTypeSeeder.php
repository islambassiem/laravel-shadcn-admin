<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Lookups\LookupType;
use Illuminate\Database\Seeder;

class LookupTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name_ar' => 'الجنس',
                'name_en' => 'Gender',
                'code' => 'gender',
                'sort_order' => 1,
            ],
            [
                'name_ar' => 'الحالة الاجتماعية',
                'name_en' => 'Marital Status',
                'code' => 'marital_status',
                'sort_order' => 2,
            ],
            [
                'name_ar' => 'الديانة',
                'name_en' => 'Religion',
                'code' => 'religion',
                'sort_order' => 3,
            ],
            [
                'name_ar' => 'الاحتاجات الخاصة',
                'name_en' => 'Special Needs',
                'code' => 'employee_special_needs',
                'sort_order' => 4,
            ],
        ];

        foreach ($types as $type) {
            LookupType::query()->create($type);
        }
    }
}
