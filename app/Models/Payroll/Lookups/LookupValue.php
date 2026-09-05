<?php

declare(strict_types=1);

namespace App\Models\Payroll\Lookups;

use App\Enums\PayrollLookupTypeEnum;
use Database\Factories\Payroll\Lookups\LookupValueFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'code',
    'sort_order',
    'filename',
    'lookup_type_id',
    'created_by',
    'updated_by',
])]
#[Table('payroll_lookup_values')]
class LookupValue extends Model
{
    /** @use HasFactory<LookupValueFactory> */
    use HasFactory;

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function components(Builder $query): void
    {
        $query->where('lookup_type_id', PayrollLookupTypeEnum::SALARY_COMPONENT_TYPES->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function revisions(Builder $query): void
    {
        $query->where('lookup_type_id', PayrollLookupTypeEnum::SALARY_REVISION_TYPES->value);
    }

    /**
     * @param  Builder<LookupValue>  $query
     */
    #[Scope]
    protected function banks(Builder $query): void
    {
        $query->where('lookup_type_id', PayrollLookupTypeEnum::BANKS->value);
    }
}
