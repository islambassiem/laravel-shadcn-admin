<?php

declare(strict_types=1);

namespace Database\Factories\Payroll\Lookups;

use App\Enums\PayrollLookupTypeEnum;
use App\Models\Payroll\Lookups\LookupValue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LookupValue>
 */
class LookupValueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_en' => fake()->word(),
            'name_ar' => fake('ar_SA')->word(),
            'code' => (string) fake()->numberBetween(),
            'lookup_type_id' => LookupValue::factory(),
        ];
    }

    public function component(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => PayrollLookupTypeEnum::SALARY_COMPONENT_TYPES->value,
        ]);
    }

    public function revision(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => PayrollLookupTypeEnum::SALARY_REVISION_TYPES->value,
        ]);
    }

    public function bank(): static
    {
        return $this->state([
            'lookup_type_id' => PayrollLookupTypeEnum::BANKS->value,
        ]);
    }
}
