<?php

declare(strict_types=1);

namespace App\Enums;

enum PayrollLookupTypeEnum: int
{
    case SALARY_COMPONENT_TYPES = 1;

    case SALARY_REVISION_TYPES = 2;

    case BANKS = 3;
}
