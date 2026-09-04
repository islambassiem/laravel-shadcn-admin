<?php

declare(strict_types=1);

namespace App\Models\Employees;

use Database\Factories\Employees\EmployeeManagerialRoleFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['employee_id', 'managerial_role_id', 'start_date', 'end_date', 'created_by', 'updated_by'])]
#[Table('employee_managerial_roles')]
class EmployeeManagerialRole extends Model
{
    /** @use HasFactory<EmployeeManagerialRoleFactory> */
    use HasFactory;
}
