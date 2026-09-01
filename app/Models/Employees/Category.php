<?php

namespace App\Models\Employees;

use App\Concerns\UserStamp;
use Database\Factories\Employees\CategoryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

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
    /** @use HasFactory<\Database\Factories\Employees\CategoryFactory> */
    use HasFactory;

    use HasTranslations;

    /** @use UserStamp<Category> */
    use UserStamp;

    /** @var array<string> */
    public array $translatable = ['name'];

    protected static function newFactory(): CategoryFactory
    {
        return CategoryFactory::new();
    }
}
