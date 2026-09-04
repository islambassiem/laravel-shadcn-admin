<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Services\DataSeeder;
use Illuminate\Database\Seeder;

class QualificationIncludedSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataSeeder::run(
            filename: 'included_specializations.json',
            table: 'qualifications_included_specializations'
        );
    }
}
