<?php

declare(strict_types=1);

namespace Database\Factories\Lookup;

use App\Models\Lookup\JobTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobTitle>
 */
class JobTitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_en' => fake()->jobTitle(),
            'name_ar' => fake('ar_SA')->jobTitle(),
            'code' => fake()->unique()->numberBetween(1, 10000000000000),
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
