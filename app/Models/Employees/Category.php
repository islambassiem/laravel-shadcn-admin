<?php

namespace App\Models\Employees;

use App\Concerns\UserStamp;
use Database\Factories\Employees\CategoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'code',
    'parent_id',
    'created_by',
    'updated_by',
])]
#[Table('lookup_categories')]
class Category extends Model
{
    /** @use HasFactory<CategoryFactory> */
    use HasFactory;

    /** @use UserStamp<Category> */
    use UserStamp;

    protected static function newFactory(): CategoryFactory
    {
        return CategoryFactory::new();
    }
}
