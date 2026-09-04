<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Employees\Employee;
use App\Models\Employees\Identity;
use App\Models\Lookups\LookupValue;
use Illuminate\Database\Seeder;

class IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employeeIds = Employee::query()->pluck('id');
        $typeIds = LookupValue::identityTypes()->pluck('id');

        Identity::factory(10)->create([
            'employee_id' => fn () => $employeeIds->random(),
            'identity_type_id' => fn () => $typeIds->random(),
        ]);
    }
}
