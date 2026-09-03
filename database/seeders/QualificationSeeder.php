<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Qualifications\Qualification;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Qualification::factory(50)->create();
    }
}
