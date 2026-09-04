<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\LookupTypeEnum;
use App\Models\Employees\Employee;
use App\Models\Employees\EmployeeDependent;
use App\Models\Lookups\LookupValue;
use Illuminate\Database\Seeder;

class EmployeeDependentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lookups = LookupValue::query()->get(['id', 'lookup_type_id']);

        $employeeIds = Employee::query()->pluck('id');
        $genderIds = $lookups
            ->filter(
                fn ($item): bool => $item->lookup_type_id === LookupTypeEnum::GENDER->value
            );
        $relationshipIds = $lookups
            ->filter(
                fn ($item): bool => $item->lookup_type_id === LookupTypeEnum::FAMILY_RELATIONSHIPS->value
            );

        EmployeeDependent::factory(100)->create([
            'employee_id' => fn () => $employeeIds->random(),
            'gender_id' => fn () => $genderIds->random(),
            'relationship_id' => fn () => $relationshipIds->random(),
        ]);
    }
}
