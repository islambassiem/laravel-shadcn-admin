<?php

declare(strict_types=1);

namespace App\Models\Qualifications\Specialities;

use App\Concerns\UserStamp;
use Database\Factories\Qualifications\Specialities\CategoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'code',
    'sort_order',
    'created_by',
    'updated_by',
])]
class Category extends Model
{
    /** @use HasFactory<CategoryFactory> */
    use HasFactory;

    /** @use UserStamp<Category> */
    use UserStamp;
}
