<?php

declare(strict_types=1);

namespace App\Models\Qualifications\Lookups;

use App\Enums\QualificationLookupTypeEnum;
use Database\Factories\Qualifications\Lookups\LookupValueFactory;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $lookup_type_id
 */
#[Table('qualifications_lookup_values')]
class LookupValue extends Model
{
    /** @use HasFactory<LookupValueFactory> */
    use HasFactory;

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function subLevels(Builder $query): void
    {
        $query->where('lookup_type_id', QualificationLookupTypeEnum::EDUCATIONAL_SUBLEVELS->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function scientificDegrees(Builder $query): void
    {
        $query->where('lookup_type_id', QualificationLookupTypeEnum::SCIENTIFIC_DEGREES->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function ratings(Builder $query): void
    {
        $query->where('lookup_type_id', QualificationLookupTypeEnum::RATINGS->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function gpaTypes(Builder $query): void
    {
        $query->where('lookup_type_id', QualificationLookupTypeEnum::GPA_TYPES->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function studyTypes(Builder $query): void
    {
        $query->where('lookup_type_id', QualificationLookupTypeEnum::STUDY_TYPES->value);
    }
}
