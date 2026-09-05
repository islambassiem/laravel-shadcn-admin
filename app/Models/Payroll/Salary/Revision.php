<?php

declare(strict_types=1);

namespace App\Models\Payroll\Salary;

use Database\Factories\Payroll\Salary\RevisionFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'employee_id',
    'revision_type_id',
    'effective_date',
    'previous_gross',
    'new_gross',
    'reason',
    'created_by',
    'updated_by',
])]
#[Table('payroll_salary_revisions')]
class Revision extends Model
{
    /** @use HasFactory<RevisionFactory> */
    use HasFactory;
}
