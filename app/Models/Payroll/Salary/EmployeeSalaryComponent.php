<?php

declare(strict_types=1);

namespace App\Models\Payroll\Salary;

use Database\Factories\Payroll\Salary\EmployeeSalaryComponentFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'employee_id',
    'component_id',
    'amount',
    'effective_from',
    'effective_to',
    'revision_id',
    'created_by',
    'updated_by',
])]
#[Table('payroll_employee_salary_components')]
class EmployeeSalaryComponent extends Model
{
    /** @use HasFactory<EmployeeSalaryComponentFactory> */
    use HasFactory;

    /**
     * @return Attribute<float, int>
     */
    protected function amount(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value): float => is_numeric($value) ? ((float) $value) / 100 : 0.0,
            set: fn (mixed $value): int => is_numeric($value) ? (int) ($value * 100) : 0,
        );
    }
}
