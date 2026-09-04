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

    case ACADEMIC_RANKS = 6;

    case ADMIN_RANKS = 7;

    case APPOINTMENT_TYPES = 8;

    case FAMILY_RELATIONSHIPS = 9;

}
