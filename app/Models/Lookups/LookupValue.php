<?php

declare(strict_types=1);

namespace App\Models\Lookups;

use App\Concerns\UserStamp;
use App\Enums\LookupTypeEnum;
use Database\Factories\Lookups\LookupValueFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  @property-read int $lookup_type_id
 */
#[Fillable([
    'name',
    'code',
    'sort_order',
    'filename',
    'lookup_type_id',
    'created_by',
    'updated_by',
])]
#[Table('system_lookup_values')]
class LookupValue extends Model
{
    /** @use HasFactory<LookupValueFactory> */
    use HasFactory;

    /** @use UserStamp<LookupValue> */
    use UserStamp;

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function genders(Builder $query): void
    {
        $query->where('lookup_type_id', LookupTypeEnum::GENDER->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function maritalStatuses(Builder $query): void
    {
        $query->where('lookup_type_id', LookupTypeEnum::MARITAL_STATUS->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function religions(Builder $query): void
    {
        $query->where('lookup_type_id', LookupTypeEnum::RELIGION->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function specialNeeds(Builder $query): void
    {
        $query->where('lookup_type_id', LookupTypeEnum::SPECIAL_NEED->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function familyRelationships(Builder $query): void
    {
        $query->where('lookup_type_id', LookupTypeEnum::FAMILY_RELATIONSHIPS->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function identityTypes(Builder $query): void
    {
        $query->where('lookup_type_id', LookupTypeEnum::IDENTITY_TYPES->value);
    }
}
