<?php

declare(strict_types=1);

namespace Database\Factories\Payroll\Salary;

use App\Models\Employees\Employee;
use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\Salary\EmployeeSalaryComponent;
use App\Models\Payroll\Salary\Revision;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EmployeeSalaryComponent>
 */
class EmployeeSalaryComponentFactory extends Factory
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
            'component_id' => LookupValue::factory()->component(),
            'amount' => fake()->numberBetween(400000),
            'effective_from' => fake()->date(),
            'effective_to' => fake()->optional()->date(),
            'revision_id' => Revision::factory(),
        ];
    }
}
