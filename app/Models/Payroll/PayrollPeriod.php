<?php

declare(strict_types=1);

namespace App\Models\Payroll;

use Database\Factories\Payroll\PayrollPeriodFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(
    'name',
    'start_date',
    'end_date',
    'pay_date',
    'status_id',
    'created_by',
    'updated_by',
)]
#[Table('payroll_periods')]
class PayrollPeriod extends Model
{
    /** @use HasFactory<PayrollPeriodFactory> */
    use HasFactory;
}
