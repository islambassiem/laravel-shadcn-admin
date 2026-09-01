<?php

declare(strict_types=1);

namespace Database\Factories\Lookups;

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
            'name' => [
                'en' => fake()->word(),
                'ar' => fake('ar')->word(),
            ],
            'code' => (string) fake()->numberBetween(),
            'lookup_type_id' => LookupType::factory(),
        ];
    }
}
