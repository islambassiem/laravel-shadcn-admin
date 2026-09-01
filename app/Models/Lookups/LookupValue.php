<?php

namespace App\Models\Lookups;

use App\Concerns\UserStamp;
use App\Enums\LookupTypeEnum;
use Database\Factories\Lookups\LookupValueFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

#[Fillable([
    'name',
    'code',
    'sort_order',
    'filename',
    'lookup_type_id',
    'created_by',
    'updated_by',
])]
class LookupValue extends Model
{
    /** @use HasFactory<LookupValueFactory> */
    use HasFactory;

    use HasTranslations;

    /** @use UserStamp<LookupValue> */
    use UserStamp;

    /** @var array<string> */
    public array $translatable = ['name'];

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
}
