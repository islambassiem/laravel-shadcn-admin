<?php

declare(strict_types=1);

namespace Database\Factories\Qualifications;

use App\Models\Employees\Employee;
use App\Models\Lookups\Country;
use App\Models\Qualifications\Lookups\IncludedSpecialization;
use App\Models\Qualifications\Lookups\LookupValue;
use App\Models\Qualifications\Lookups\Speciality;
use App\Models\Qualifications\Qualification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Qualification>
 */
class QualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::factory(),
            'major_id' => Speciality::factory(),
            'minor_id' => Speciality::factory(),
            'educational_sub_level_id' => LookupValue::factory()->educationalSublevel(),
            'included_specialty_id' => IncludedSpecialization::factory(),
            'institution_name' => fake()->company(),
            'college_name' => fake()->company(),
            'scientific_degree_id' => LookupValue::factory()->scientificDegree(),
            'graduation_date' => fake()->date(),
            'graduation_country_id' => Country::factory(),
            'is_last_qualification' => fake()->boolean(),

            'rating_id' => LookupValue::factory()->rating(),
            'gpa' => fake()->randomFloat(2, 0, 4),
            'gpa_type_id' => LookupValue::factory()->gpaType(),
            'study_type_id' => LookupValue::factory()->studyType(),
            'city' => fake()->city(),
            'is_authenticated' => fake()->boolean(),
        ];
    }
}
