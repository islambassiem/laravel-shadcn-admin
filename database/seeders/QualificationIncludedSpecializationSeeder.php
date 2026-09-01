<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class QualificationIncludedSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DataSeeder::run(
        //     filename: 'included_specializations.json',
        //     table: 'qualifications_included_specializations'
        // );

        $fileContent = File::get(database_path('data/included_specializations.json'));

        /** @var array<int, array{
         *     code: string,
         *     name_en: string,
         *     name_ar: string
         * }> $values
         */
        $values = json_decode($fileContent, true);

        foreach ($values as $value) {
            $data = [
                'name_en' => $value['name_en'],
                'name_ar' => $value['name_ar'],
                'code' => $value['code'],
                'created_at' => now(),
                'updated_at' => now(),
            ];

            DB::table('qualifications_included_specializations')->insert($data);
        }
    }
}
