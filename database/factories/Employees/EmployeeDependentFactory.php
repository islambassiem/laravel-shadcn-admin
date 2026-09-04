<?php

declare(strict_types=1);

namespace Database\Factories\Employees;

use App\Enums\LookupTypeEnum;
use App\Models\Employees\Employee;
use App\Models\Employees\EmployeeDependent;
use App\Models\Lookups\LookupValue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EmployeeDependent>
 */
class EmployeeDependentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'name_en' => fake()->name(),
            'name_ar' => fake('ar')->name(),
            'identification' => fake()->numerify('##########'),
            'gender_id' => LookupValue::factory()->state(['lookup_type_id' => LookupTypeEnum::GENDER->value]),
            'date_of_birth' => fake()->date(),
            'relationship_id' => LookupValue::factory()->state(['lookup_type_id' => LookupTypeEnum::FAMILY_RELATIONSHIPS->value]),
            'has_insurance' => (bool) random_int(0, 1),
            'ticket_ratio' => fake()->numberBetween(0, 100),
        ];
    }
}
