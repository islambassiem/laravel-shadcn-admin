<?php

declare(strict_types=1);

namespace Database\Factories\Qualifications\Lookups;

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
}
