<?php

declare(strict_types=1);

namespace Database\Factories\Payroll;

use App\Models\Employees\Employee;
use App\Models\Payroll\EmployeeBank;
use App\Models\Payroll\Lookups\LookupValue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EmployeeBank>
 */
class EmployeeBankFactory extends Factory
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
            'bank_id' => LookupValue::factory()->bank(),
            'iban' => fake()->iban('SA'),
        ];
    }
}
