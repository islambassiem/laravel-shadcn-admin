<?php

declare(strict_types=1);

namespace Database\Factories\Leave;

use App\Models\Leave\LeaveType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LeaveType>
 */
class LeaveTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_ar' => fake('ar_SA')->word(),
            'name_en' => fake()->word(),
            'code' => fake()->unique()->numberBetween(1, 10000000000000),
        ];
    }
}
