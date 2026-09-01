<?php

declare(strict_types=1);

namespace App\Models\Lookups;

use App\Concerns\UserStamp;
use Database\Factories\Lookups\CountryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'code',
    'order',
    'lang',
    'is_active',
    'created_by',
    'updated_by',
])]
#[Table('lookup_countries')]
class Country extends Model
{
    /** @use HasFactory<CountryFactory> */
    use HasFactory;

    /** @use UserStamp<Country> */
    use UserStamp;

    protected function casts(): array
    {
        return [
            'name' => 'array',
            'is_active' => 'boolean',
        ];
    }
}
