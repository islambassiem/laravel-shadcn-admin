<?php

declare(strict_types=1);

namespace App\Models\Employees;

use Database\Factories\Employees\IdentityFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'employee_id',
    'identity_type_id',
    'identity_number',
    'place_of_issue',
    'issue_date',
    'expiry_date',
    'created_by',
    'updated_by',
])]
#[Table('employee_identities')]
class Identity extends Model
{
    /** @use HasFactory<IdentityFactory> */
    use HasFactory;
}
