<?php

declare(strict_types=1);

namespace App\Models\Employees;

use Database\Factories\Employees\EmployeeDependentFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'employee_id',
    'name_en',
    'name_ar',
    'identification',
    'gender_id',
    'date_of_birth',
    'relationship_id',
    'has_insurance',
    'ticket_ratio',
    'created_by',
    'updated_by',
])]
#[Table('employee_dependents')]
class EmployeeDependent extends Model
{
    /** @use HasFactory<EmployeeDependentFactory> */
    use HasFactory;
}
