<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Qualifications\Lookups\LookupType;
use Illuminate\Database\Seeder;

class QualificationLookupTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name_ar' => 'الدرجة العلمية',
                'name_en' => 'Scientific Degree',
                'code' => 'scientific_degree',
                'sort_order' => 1,
            ],
            [
                'name_ar' => 'المستوى التعليمي الفرعي',
                'name_en' => 'Educational Sublevel',
                'code' => 'educational_sublevel',
                'sort_order' => 2,
            ],
            [
                'name_ar' => 'التقييم',
                'name_en' => 'Rating',
                'code' => 'ratings',
                'sort_order' => 3,
            ],
            [
                'name_ar' => 'أنواع المعدل التراكمي',
                'name_en' => 'GPA Types',
                'code' => 'gpa_types',
                'sort_order' => 4,
            ],
            [
                'name_ar' => 'أنواع الدراسة',
                'name_en' => 'Study Types',
                'code' => 'study_types',
                'sort_order' => 5,
            ],
        ];

        foreach ($types as $type) {
            LookupType::query()->create($type);
        }
    }
}
