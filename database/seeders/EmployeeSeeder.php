<?php

namespace Database\Seeders;

use App\Enums\DepartmentTypeEnum;
use App\Models\Employees\Category;
use App\Models\Employees\Employee;
use App\Models\Lookups\Country;
use App\Models\Lookups\Department;
use App\Models\Lookups\Gender;
use App\Models\Lookups\LookupValue;
use App\Models\Lookups\MaritalStatus;
use App\Models\Lookups\Religion;
use App\Models\Lookups\SpecialNeed;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(300)->create();

        foreach ($users as $user) {
            Employee::factory()->create([
                'user_id' => $user->id,
                'marital_status_id' => fn () => LookupValue::query()->maritalStatuses()->inRandomOrder()->value('id'),
                'religion_id' => fn () => LookupValue::query()->religions()->inRandomOrder()->value('id'),
                'special_needs_id' => fn () => LookupValue::query()->specialNeeds()->inRandomOrder()->value('id'),
                'gender_id' => fn () => LookupValue::query()->genders()->inRandomOrder()->value('id'),
                'category_id' => fn () => Category::query()->inRandomOrder()->value('id'),
                'department_id' => fn () => Department::query()->inRandomOrder()->value('id'),
                'nationality_id' => fn () => Country::query()->inRandomOrder()->value('id'),
                'place_of_birth_id' => fn () => Country::query()->inRandomOrder()->value('id'),
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
