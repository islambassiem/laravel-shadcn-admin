<?php

declare(strict_types=1);

namespace App\Models\Qualifications\Lookups;

use App\Concerns\UserStamp;
use Database\Factories\Qualifications\Lookups\SpecialityFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name_en',
    'name_ar',
    'code',
    'sort_order',
    'category_id',
    'created_by',
    'updated_by',
])]
#[Table('qualifications_specialities')]
class Speciality extends Model
{
    /** @use HasFactory<SpecialityFactory> */
    use HasFactory;

    /** @use UserStamp<Speciality> */
    use UserStamp;
}
