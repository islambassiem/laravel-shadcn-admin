<?php

declare(strict_types=1);

namespace App\Models\Qualifications\Lookups;

use App\Concerns\UserStamp;
use Database\Factories\Qualifications\Lookups\CategoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// SA29 3040 0108 0681 7705 0014
#[Fillable([
    'name_en',
    'name_ar',
    'code',
    'sort_order',
    'created_by',
    'updated_by',
])]
#[Table('qualifications_categories')]
class Category extends Model
{
    /** @use HasFactory<CategoryFactory> */
    use HasFactory;

    /** @use UserStamp<Category> */
    use UserStamp;
}
