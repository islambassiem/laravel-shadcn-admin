<?php

namespace Database\Factories\Employees;

use App\Enums\IdentityTypeEnum;
use App\Models\Employees\Employee;
use App\Models\Employees\Identity;
use App\Models\Lookups\LookupValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

/**
 * @extends Factory<Identity>
 */
class IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $issueDate = Date::createFromFormat('Y-m-d', fake()->date());
        $types = IdentityTypeEnum::cases();

        return [
            'employee_id' => Employee::factory(),
            'identity_type_id' => LookupValue::factory()->state([
                'lookup_type_id' => $types[\random_int(0, \count($types) - 1)]->value,
            ]),
            'identity_number' => fake()->unique()->numerify('##########'),
            'place_of_issue' => fake()->city(),
            'issue_date' => $issueDate,
            'expiry_date' => $issueDate?->addYears(5),
        ];
    }
}
