<?php

declare(strict_types=1);

namespace App\Models\Workflow;

use App\Concerns\UserStamp;
use Database\Factories\Workflow\WorkflowFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name_en',
    'name_ar',
    'code',
    'created_by',
    'updated_by',
])]
class Workflow extends Model
{
    /** @use HasFactory<WorkflowFactory> */
    use HasFactory;

    /** @use UserStamp<Workflow> */
    use UserStamp;
}
