<?php

declare(strict_types=1);

namespace Database\Factories\Qualifications\Lookups;

use App\Enums\QualificationLookupTypeEnum;
use App\Models\Qualifications\Lookups\LookupType;
use App\Models\Qualifications\Lookups\LookupValue;
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

    public function educationalSublevel(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => QualificationLookupTypeEnum::EDUCATIONAL_SUBLEVELS->value,
        ]);
    }

    public function scientificDegree(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => QualificationLookupTypeEnum::SCIENTIFIC_DEGREES->value,
        ]);
    }

    public function rating(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => QualificationLookupTypeEnum::RATINGS->value,
        ]);
    }

    public function gpaType(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => QualificationLookupTypeEnum::GPA_TYPES->value,
        ]);
    }

    public function studyType(): static
    {
        return $this->state(fn (array $attributes): array => [
            'lookup_type_id' => QualificationLookupTypeEnum::STUDY_TYPES->value,
        ]);
    }
}
