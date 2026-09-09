<?php

declare(strict_types=1);

namespace Database\Factories\Payroll;

use App\Models\Payroll\Lookups\LookupValue;
use App\Models\Payroll\PayslipItem;
use App\Models\PayrollPayslip;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PayslipItem>
 */
class PayslipItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payslip_id' => PayrollPayslip::factory(),
            'item_type' => LookupValue::factory(),
            'amount' => fake()->numberBetween(),
            'description' => fake()->sentence(),
        ];
    }
}
