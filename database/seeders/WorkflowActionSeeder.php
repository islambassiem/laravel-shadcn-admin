<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Workflow\WorkflowAction;
use Illuminate\Database\Seeder;

class WorkflowActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkflowAction::factory(60)->create();
    }
}
