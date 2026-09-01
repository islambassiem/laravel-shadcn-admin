<?php

namespace Database\Seeders;

use App\Enums\LookupTypeEnum;
use App\Services\DataSeeder;
use Illuminate\Database\Seeder;

class SystemLookupValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = LookupTypeEnum::cases();

        foreach ($types as $type) {
            $filename = strtolower($type->name).'.json';
            DataSeeder::run(
                filename: $filename,
                table: 'system_lookup_values',
                lookup_type_id: $type->value
            );
        }
    }
}
