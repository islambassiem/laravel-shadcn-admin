<?php

namespace Database\Seeders;

use App\Enums\LookupTypeEnum;
use App\Models\Lookups\LookupValue;
use App\Services\DataSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LookupValueSeeder extends Seeder
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
                table: 'lookup_values',
                lookup_type_id: $type->value
            );
        }
    }
}
