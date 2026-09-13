<?php

declare(strict_types=1);

namespace App\Models\ShortLeave;

use App\Concerns\UserStamp;
use Database\Factories\ShortLeave\ShortLeaveTypeFactory;
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
class ShortLeaveType extends Model
{
    /** @use HasFactory<ShortLeaveTypeFactory> */
    use HasFactory;

    /** @use UserStamp<ShortLeaveType> */
    use UserStamp;
}
