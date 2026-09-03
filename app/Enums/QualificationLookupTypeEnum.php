<?php

declare(strict_types=1);

namespace App\Enums;

enum QualificationLookupTypeEnum: int
{
    case SCIENTIFIC_DEGREES = 1;

    case EDUCATIONAL_SUBLEVELS = 2;

    case RATINGS = 3;

    case GPA_TYPES = 4;

    case STUDY_TYPES = 5;
}
