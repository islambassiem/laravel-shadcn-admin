<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\QualificationLookupTypeEnum;
use App\Models\Employees\Employee;
use App\Models\Lookups\Country;
use App\Models\Qualifications\Lookups\IncludedSpecialization;
use App\Models\Qualifications\Lookups\LookupValue;
use App\Models\Qualifications\Lookups\Speciality;
use App\Models\Qualifications\Qualification;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lookups = LookupValue::query()->get(['id', 'lookup_type_id']);

        $employeeIds = Employee::query()
            ->pluck('id');
        $specialityIds = Speciality::query()
            ->pluck('id');
        $subLevelIds = $lookups
            ->filter(
                fn (LookupValue $item): bool => $item->lookup_type_id === QualificationLookupTypeEnum::EDUCATIONAL_SUBLEVELS->value
            );
        $includedSpecialityIds = IncludedSpecialization::query()
            ->pluck('id');
        $scientificDegreeIds = $lookups
            ->filter(
                fn (LookupValue $item): bool => $item->lookup_type_id === QualificationLookupTypeEnum::SCIENTIFIC_DEGREES->value
            );
        $countryIds = Country::query()
            ->pluck('id');
        $ratingIds = $lookups
            ->filter(
                fn (LookupValue $item): bool => $item->lookup_type_id === QualificationLookupTypeEnum::RATINGS->value
            );
        $gpaTypeIds = $lookups
            ->filter(
                fn (LookupValue $item): bool => $item->lookup_type_id === QualificationLookupTypeEnum::GPA_TYPES->value
            );
        $studyTypeIds = $lookups
            ->filter(
                fn (LookupValue $item): bool => $item->lookup_type_id === QualificationLookupTypeEnum::STUDY_TYPES->value
            );

        Qualification::factory(50)->create([
            'employee_id' => fn () => $employeeIds->random(),
            'major_id' => fn () => $specialityIds->random(),
            'minor_id' => fn () => $specialityIds->random(),
            'educational_sub_level_id' => fn () => $subLevelIds->random(),
            'included_specialty_id' => fn () => $includedSpecialityIds->random(),
            'scientific_degree_id' => fn () => $scientificDegreeIds->random(),
            'graduation_country_id' => fn () => $countryIds->random(),
            'rating_id' => fn () => $ratingIds->random(),
            'gpa_type_id' => fn () => $gpaTypeIds->random(),
            'study_type_id' => fn () => $studyTypeIds->random(),
        ]);
    }
}
