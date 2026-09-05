<?php

declare(strict_types=1);

namespace Database\Factories\Payroll\Lookups;

use App\Enums\PayrollLookupTypeEnum;
use App\Models\Payroll\Lookups\LookupType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LookupType>
 */
class LookupTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_ar' => fake('ar_SA')->word(),
            'name_en' => fake()->word(),
            'code' => fake()->unique()->numberBetween(1, 10000000000000),
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
