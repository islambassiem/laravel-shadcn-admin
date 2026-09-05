<?php

declare(strict_types=1);

namespace Database\Factories\Payroll\Salary;

use App\Models\Employees\Employee;
use App\Models\Payroll\Lookups\LookupType;
use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\Salary\Revision;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Revision>
 */
class RevisionFactory extends Factory
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
            'revision_type_id' => LookupValue::factory()->revision(),
            'effective_date' => fake()->date(),
            'previous_gross' => fake()->numberBetween(400000),
            'new_gross' => fake()->numberBetween(600000),
            'reason' => fake()->sentence(),
        ];
    }
}
