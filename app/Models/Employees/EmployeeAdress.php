<?php

declare(strict_types=1);

namespace App\Models\Employees;

use Database\Factories\Employees\EmployeeAdressFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'employee_id',
    'short_address',
    'building_number',
    'street',
    'secondary_number',
    'district',
    'postal_code',
    'city',
    'created_by',
    'updated_by',
])]
#[Table('employee_adresses')]
class EmployeeAdress extends Model
{
    /** @use HasFactory<EmployeeAdressFactory> */
    use HasFactory;
}
