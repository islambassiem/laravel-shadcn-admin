<?php

declare(strict_types=1);

namespace Database\Factories\Qualifications\Lookups;

use App\Models\Qualifications\Lookups\Speciality;
use App\Models\Qualifications\Lookups\SpecialityCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Speciality>
 */
class SpecialityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_en' => fake()->name(),
            'name_ar' => fake('ar_SA')->name(),
            'code' => fake()->unique()->numberBetween(1, 100000000),
            'category_id' => SpecialityCategory::factory(),
        ];
    }
}
