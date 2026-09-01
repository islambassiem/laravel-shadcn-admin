<?php

namespace Database\Seeders;

use App\Enums\QualificationLookupTypeEnum;
use App\Services\DataSeeder;
use Illuminate\Database\Seeder;

class QualificationLookupValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = QualificationLookupTypeEnum::cases();

        foreach ($types as $type) {
            $filename = strtolower($type->name).'.json';
            DataSeeder::run(
                filename: $filename,
                table: 'qualifications_lookup_values',
                lookup_type_id: $type->value
            );
        }
    }
}
