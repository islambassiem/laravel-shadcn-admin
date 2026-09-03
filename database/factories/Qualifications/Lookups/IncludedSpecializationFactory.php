<?php

declare(strict_types=1);

namespace Database\Factories\Qualifications\Lookups;

use App\Models\Qualifications\Lookups\IncludedSpecialization;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<IncludedSpecialization>
 */
#[UseModel(IncludedSpecialization::class)]
class IncludedSpecializationFactory extends Factory
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
            'code' => fake()->unique()->numberBetween(1, 100000000),
        ];
    }
}
