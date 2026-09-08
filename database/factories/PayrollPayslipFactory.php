<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Employees\Employee;
use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\PayrollRun;
use App\Models\Payroll\Salary\Revision;
use App\Models\PayrollPayslip;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PayrollPayslip>
 */
class PayrollPayslipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $grossEarnings = fake()->randomFloat(2, 3000, 30000);
        $totalDeductions = fake()->randomFloat(2, 100, $grossEarnings * 0.25);

        return [
            'run_id' => PayrollRun::factory(),
            'employee_id' => Employee::factory(),
            'salary_revision_id' => Revision::factory(),
            'days_worked' => fake()->numberBetween(0, 30),
            'gross_earnings' => $grossEarnings,
            'total_deductions' => $totalDeductions,
            'net_pay' => round($grossEarnings - $totalDeductions, 2),
            'status_id' => LookupValue::factory()->payslipStatus(),
            'remarks' => fake()->optional()->sentence(8),
        ];
    }
}
