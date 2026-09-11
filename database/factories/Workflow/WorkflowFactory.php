<?php

declare(strict_types=1);

namespace Database\Factories\Workflow;

use App\Models\Workflow\Workflow;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Workflow>
 */
class WorkflowFactory extends Factory
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
