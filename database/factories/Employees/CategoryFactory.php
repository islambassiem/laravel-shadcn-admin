<?php

namespace Database\Factories\Employees;

use App\Models\Employees\Category;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
#[UseModel(Category::class)]
class CategoryFactory extends Factory
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
            'code' => fake()->unique()->numberBetween(1, 100000000),
            'parent_id' => null,
            'created_by' => null,
            'updated_by' => null,
        ];
    }
}
