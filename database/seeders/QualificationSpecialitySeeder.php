<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class QualificationSpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fileContent = File::get(database_path('data/qualifications_specialities.json'));

        /** @var array<int, array{
         *     code: string,
         *     name_en: string,
         *     name_ar: string,
         *     category_id: int
         * }> $values
         */
        $values = json_decode($fileContent, true);

        foreach ($values as $value) {
            $data = [
                'name_en' => $value['name_en'],
                'name_ar' => $value['name_ar'],
                'code' => $value['code'],
                'category_id' => $value['category_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('qualifications_specialities_specialities')->insert($data);
        }
    }
}
