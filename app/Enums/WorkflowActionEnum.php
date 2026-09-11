<?php

declare(strict_types=1);

namespace App\Enums;

enum WorkflowActionEnum: int
{
    case PENDING = 1;

    case APPROVED = 2;

    case REJECTED = 3;
}
