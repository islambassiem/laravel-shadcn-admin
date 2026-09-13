<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Leave\LeaveType;
use Illuminate\Database\Seeder;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeaveType::factory(5)->create();
    }
}
