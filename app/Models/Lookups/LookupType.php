<?php

declare(strict_types=1);

namespace App\Models\Lookups;

use App\Concerns\UserStamp;
use Database\Factories\Lookups\LookupTypeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'code',
    'created_by',
    'updated_by',
])]
class LookupType extends Model
{
    /** @use HasFactory<LookupTypeFactory> */
    use HasFactory;

    /** @use UserStamp<LookupType> */
    use UserStamp;
}
