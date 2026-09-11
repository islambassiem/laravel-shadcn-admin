<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Workflow\WorkflowStep;
use Illuminate\Database\Seeder;

class WorkflowStepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkflowStep::factory(50)->create();
    }
}
