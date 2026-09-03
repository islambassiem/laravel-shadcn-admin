<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Identity;
use Illuminate\Database\Seeder;

class IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Identity::factory(10)->create();
    }
}
