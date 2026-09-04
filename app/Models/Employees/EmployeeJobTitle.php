<?php

declare(strict_types=1);

namespace App\Models\Employees;

use Database\Factories\Employees\EmployeeJobTitleFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['employee_id', 'job_title_id', 'start_date', 'end_date', 'created_by', 'updated_by'])]
#[Table('employee_job_titles')]
class EmployeeJobTitle extends Model
{
    /** @use HasFactory<EmployeeJobTitleFactory> */
    use HasFactory;
}
