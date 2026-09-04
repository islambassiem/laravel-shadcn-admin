<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\LookupTypeEnum;
use App\Models\Employees\Category;
use App\Models\Employees\Employee;
use App\Models\Lookups\LookupValue;
use App\Models\Organization\Department;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lookups = LookupValue::query()->get(['id', 'lookup_type_id']);

        $users = User::factory(300)->create();
        $maritalStatisIds = $lookups
            ->filter(
                fn ($item): bool => $item->lookup_type_id === LookupTypeEnum::MARITAL_STATUS->value
            );
        $religionIds = $lookups
            ->filter(
                fn ($item): bool => $item->lookup_type_id === LookupTypeEnum::RELIGION->value
            );
        $specialNeedIds = $lookups
            ->filter(
                fn ($item): bool => $item->lookup_type_id === LookupTypeEnum::SPECIAL_NEED->value
            );
        $genderIds = $lookups
            ->filter(
                fn ($item): bool => $item->lookup_type_id === LookupTypeEnum::GENDER->value
            );

        $countryIds = Category::query()->pluck('id');
        $departmentIds = Department::query()->pluck('id');

        foreach ($users as $user) {
            Employee::factory()->create([
                'user_id' => $user->id,
                'marital_status_id' => fn () => $maritalStatisIds->random(),
                'religion_id' => fn () => $religionIds->random(),
                'special_needs_id' => fn () => $specialNeedIds->random(),
                'gender_id' => fn () => $genderIds->random(),
                'category_id' => fn () => $countryIds->random(),
                'department_id' => fn () => $departmentIds->random(),
                'nationality_id' => fn () => $countryIds->random(),
                'place_of_birth_id' => fn () => $countryIds->random(),
            ]);
        }

        $employees = Employee::all();

        foreach ($employees as $employee) {
            /** @var Employee $head */
            $head = $employees->random();
            $employee->update([
                'head_id' => $head->id,
            ]);
        }
    }
}
