<?php

declare(strict_types=1);

namespace App\Models\Payroll\Lookups;

use Database\Factories\Payroll\Lookups\LookupTypeFactory;
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
#[Table('payroll_lookup_types')]
class LookupType extends Model
{
    /** @use HasFactory<LookupTypeFactory> */
    use HasFactory;
}
