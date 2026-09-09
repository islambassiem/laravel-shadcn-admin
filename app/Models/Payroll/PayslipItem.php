<?php

declare(strict_types=1);

namespace App\Models\Payroll;

use App\Concerns\UserStamp;
use Database\Factories\Payroll\PayslipItemFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'payslip_id',
    'item_type',
    'amount',
    'description',
    'created_by',
    'updated_by',
])]
class PayslipItem extends Model
{
    /** @use HasFactory<PayslipItemFactory> */
    use HasFactory;

    /** @use UserStamp <PayslipItem> */
    use UserStamp;
}
