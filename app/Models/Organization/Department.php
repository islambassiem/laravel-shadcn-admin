<?php

declare(strict_types=1);

namespace App\Models\Organization;

use App\Concerns\UserStamp;
use App\Enums\DepartmentTypeEnum;
use Database\Factories\Organization\DepartmentFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

#[Fillable([
    'name',
    'code',
    'type',
    'is_active',
    'parent_id',
    'head_id',
    'created_by',
    'updated_by',
])]
#[Table('lookup_departments')]
class Department extends Model
{
    /** @use HasFactory<DepartmentFactory> */
    use HasFactory;

    use HasTranslations;

    /** @use UserStamp<Department> */
    use UserStamp;

    /** @var array<string> */
    public array $translatable = ['name'];

    protected function casts(): array
    {
        return [
            'name' => 'array',
            'type' => DepartmentTypeEnum::class,
            'is_active' => 'boolean',
        ];
    }
}
