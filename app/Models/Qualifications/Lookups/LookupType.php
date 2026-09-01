<?php

declare(strict_types=1);

namespace App\Models\Qualifications\Lookups;

use App\Concerns\UserStamp;
use Database\Factories\Qualifications\Lookups\LookupTypeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name_en',
    'name_ar',
    'code',
    'sort_order',
    'created_by',
    'created_at',
])]
#[Table('qualifications_lookup_types')]
class LookupType extends Model
{
    /** @use HasFactory<LookupTypeFactory> */
    use HasFactory;

    /** @use UserStamp<LookupType> */
    use UserStamp;
}
