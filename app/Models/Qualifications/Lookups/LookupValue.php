<?php

declare(strict_types=1);

namespace App\Models\Qualifications\Lookups;

use Database\Factories\Qualifications\Lookups\LookupValueFactory;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table('qualifications_lookup_values')]
class LookupValue extends Model
{
    /** @use HasFactory<LookupValueFactory> */
    use HasFactory;
}
