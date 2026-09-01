<?php

declare(strict_types=1);

namespace Database\Factories\Employees;

use App\Enums\LookupTypeEnum;
use App\Models\Employees\Category;
use App\Models\Employees\Employee;
use App\Models\Lookups\Country;
use App\Models\Lookups\Department;
use App\Models\Lookups\LookupValue;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'head_id' => null,
            'employee_code' => fake()->unique()->regexify('50[01][0-9]{3}'),

            'first_name_ar' => fake('ar')->firstName(),
            'middle_name_ar' => fake()->randomElement([null, fake('ar')->firstName()]),
            'third_name_ar' => fake()->randomElement([null, fake('ar')->firstName()]),
            'last_name_ar' => fake('ar')->lastName(),

            'first_name_en' => fake()->firstName(),
            'middle_name_en' => fake()->randomElement([null, fake()->firstName()]),
            'third_name_en' => fake()->randomElement([null, fake()->firstName()]),
            'last_name_en' => fake()->lastName(),

            'marital_status_id' => LookupValue::factory()->state(['lookup_type_id' => LookupTypeEnum::MARITAL_STATUS->value]),
            'religion_id' => LookupValue::factory()->state(['lookup_type_id' => LookupTypeEnum::RELIGION->value]),
            'special_needs_id' => LookupValue::factory()->state(['lookup_type_id' => LookupTypeEnum::SPECIAL_NEED->value]),

            'gender_id' => LookupValue::factory()->state(['lookup_type_id' => LookupTypeEnum::GENDER->value]),
            'category_id' => Category::factory(),
            'department_id' => Department::factory(),
            'nationality_id' => Country::factory(),
            'place_of_birth_id' => Country::query()->inRandomOrder()->value('id') ?? Country::factory(),

            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->numerify('5########'),

            'date_of_birth' => fake()->date(),
            'joining_date' => fake()->date(),
            'leaving_date' => fake()->date(),

            'home_telephone_number' => fake()->randomElement([null, fake()->phoneNumber()]),
            'home_country_identity' => fake()->randomElement([null, fake()->numerify('##########')]),
            'blood_type' => fake()->bloodGroup(),

            'is_active' => fake()->boolean(70),
        ];
    }
}
