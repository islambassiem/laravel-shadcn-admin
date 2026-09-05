<?php

declare(strict_types=1);

namespace Database\Factories\Lookups;

use App\Enums\LookupTypeEnum;
use App\Models\Lookups\LookupType;
use App\Models\Lookups\LookupValue;
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
            'lookup_type_id' => LookupType::factory(),
        ];
    }

    public function gender(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => LookupTypeEnum::GENDER->value,
        ]);
    }

    public function familyRelationsip(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => LookupTypeEnum::FAMILY_RELATIONSHIPS->value,
        ]);
    }

    public function maritalSataus(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => LookupTypeEnum::MARITAL_STATUS->value,
        ]);
    }

    public function religion(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => LookupTypeEnum::RELIGION->value,
        ]);
    }

    public function specialNeed(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => LookupTypeEnum::SPECIAL_NEED->value,
        ]);
    }
}
