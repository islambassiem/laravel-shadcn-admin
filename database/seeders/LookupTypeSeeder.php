<?php

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
                'name' => [
                    'ar' => 'الجنس',
                    'en' => 'Gender',
                ],
                'code' => 'gender',
                'sort_order' => 1,
            ],
            [
                'name' => [
                    'ar' => 'الحالة الاجتماعية',
                    'en' => 'Marital Status',
                ],
                'code' => 'marital_status',
                'sort_order' => 2,
            ],
            [
                'name' => [
                    'ar' => 'الديانة',
                    'en' => 'Religion',
                ],
                'code' => 'religion',
                'sort_order' => 3,
            ],
            [
                'name' => [
                    'ar' => 'الاحتاجات الخاصة',
                    'en' => 'Special Needs',
                ],
                'code' => 'employee_special_needs',
                'sort_order' => 4,
            ],
        ];

        foreach ($types as $type) {
            LookupType::query()->create($type);
        }
    }
}
