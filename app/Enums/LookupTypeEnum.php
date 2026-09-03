<?php

declare(strict_types=1);

namespace App\Enums;

enum LookupTypeEnum: int
{
    case GENDER = 1;

    case MARITAL_STATUS = 2;

    case RELIGION = 3;

    case SPECIAL_NEED = 4;

    case IDENTITY_TYPES = 5;
}
