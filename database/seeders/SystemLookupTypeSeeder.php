<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Lookups\LookupType;
use Illuminate\Database\Seeder;

class SystemLookupTypeSeeder extends Seeder
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
            [
                'name_ar' => 'نوع الهوية',
                'name_en' => 'Identity Type',
                'code' => 'identity_type',
                'sort_order' => 5,
            ],
            [
                'name_ar' => 'المراتب الأكاديمية',
                'name_en' => 'Academic Rank',
                'code' => 'academic_rank',
                'sort_order' => 6,
            ],
            [
                'name_ar' => 'المراتب الوظيفية',
                'name_en' => 'Administrative Rank',
                'code' => 'administrative_rank',
                'sort_order' => 7,
            ],
            [
                'name_ar' => 'أنواع التعيين',
                'name_en' => 'Appointment Types',
                'code' => 'appointment_type',
                'sort_order' => 8,
            ],
            [
                'name_ar' => 'العلاقات الأسرية',
                'name_en' => 'Family Relationships',
                'code' => 'family_relationships',
                'sort_order' => 9,
            ],
        ];

        foreach ($types as $type) {
            LookupType::query()->create($type);
        }
    }
}
