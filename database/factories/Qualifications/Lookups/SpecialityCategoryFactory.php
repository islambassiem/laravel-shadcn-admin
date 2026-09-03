<?php

declare(strict_types=1);

namespace Database\Factories\Qualifications\Lookups;

use App\Models\Qualifications\Lookups\SpecialityCategory;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SpecialityCategory>
 */
#[Table('qualifications_specialities_categories')]
class SpecialityCategoryFactory extends Factory
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
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
