<?php

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
        EmployeeDependent::factory(100)->create([
            'employee_id' => fn () => Employee::query()->inRandomOrder()->value('id'),
            'gender_id' => fn () => LookupValue::query()->where('lookup_type_id', LookupTypeEnum::GENDER->value)->inRandomOrder()->value('id'),
            'relationship_id' => fn () => LookupValue::query()->where('lookup_type_id', LookupTypeEnum::FAMILY_RELATIONSHIPS->value)->inRandomOrder()->value('id'),
        ]);
    }
}
