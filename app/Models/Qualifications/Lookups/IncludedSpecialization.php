<?php

declare(strict_types=1);

namespace App\Models\Qualifications\Lookups;

use App\Concerns\UserStamp;
use Database\Factories\Qualifications\Lookups\IncludedSpecializationFactory;
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
    'updated_by',
])]
#[Table('qualifications_included_specializations')]
class IncludedSpecialization extends Model
{
    /** @use HasFactory<IncludedSpecializationFactory> */
    use HasFactory;

    /** @use UserStamp<IncludedSpecialization> */
    use UserStamp;
}
