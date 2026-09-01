<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DataSeeder
{
    public static function run(string $filename, string $table, ?int $lookup_type_id = null, ?int $category_id = null): void
    {
        $fileContent = File::get(database_path("data/$filename"));

        /** @var array<int, array{
         *     code: string,
         *     name: array{en: string, ar: string},
         * }> $values
         */
        $values = json_decode($fileContent, true);

        foreach ($values as $value) {
            $data = [
                'name' => json_encode($value['name'], JSON_UNESCAPED_UNICODE),
                'code' => $value['code'],
                'created_at' => now(),
                'updated_at' => now(),
            ];

            if ($lookup_type_id) {
                $data['lookup_type_id'] = $lookup_type_id;
            }

            if ($category_id) {
                $data['category_id'] = $category_id;
            }

            DB::table($table)->insert($data);
        }
    }
}
