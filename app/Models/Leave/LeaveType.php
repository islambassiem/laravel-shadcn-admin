<?php

declare(strict_types=1);

namespace App\Models\Leave;

use App\Concerns\UserStamp;
use Database\Factories\Leave\LeaveTypeFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name_en',
    'name_ar',
    'code',
    'description',
    'created_by',
    'updated_by',
])]
class LeaveType extends Model
{
    /** @use HasFactory<LeaveTypeFactory> */
    use HasFactory;

    /** @use UserStamp<LeaveType> */
    use UserStamp;
}
