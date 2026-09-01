<?php

namespace Database\Factories\Lookups;

use App\Models\Lookups\LookupType;
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
            'name' => [
                'ar' => fake('ar')->word(),
                'en' => fake()->word(),
            ],
            'code' => fake()->unique()->numberBetween(1, 10000000000000),
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
