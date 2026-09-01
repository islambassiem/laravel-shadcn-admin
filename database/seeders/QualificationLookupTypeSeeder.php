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
        ];

        foreach ($types as $type) {
            LookupType::query()->create($type);
        }
    }
}
