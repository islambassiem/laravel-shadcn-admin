<?php

declare(strict_types=1);

namespace Database\Factories\Organization;

use App\Enums\DepartmentTypeEnum;
use App\Models\Organization\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = DepartmentTypeEnum::cases();

        return [
            'name_ar' => fake('ar_SA')->text(30),
            'name_en' => fake()->text(30),
            'code' => fake()->unique()->numberBetween(1, 10000000000000),
            'type' => $types[array_rand($types)],
            'is_active' => (bool) random_int(0, 1),
            'parent_id' => null,
            'head_id' => null,
        ];
    }
}
