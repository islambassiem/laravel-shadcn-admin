<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DataSeeder
{
    public static function run(
        string $filename,
        string $table,
        ?int $lookup_type_id = null): void
    {
        $fileContent = File::get(database_path("data/$filename"));

        /** @var array<int, array{
         *     code: string,
         *     name_en: string,
         *     name_ar: string,
         *     category_id: int|null
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

            if ($lookup_type_id) {
                $data['lookup_type_id'] = $lookup_type_id;
            }

            if (isset($value['category_id'])) {
                $data['category_id'] = $value['category_id'];
            }

            DB::table($table)->insert($data);
        }
    }
}
