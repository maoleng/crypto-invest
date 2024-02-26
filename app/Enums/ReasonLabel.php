<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ReasonLabel extends Enum
{

    public const MUST_HAVE = 0;
    public const NICE_TO_HAVE = 1;
    public const WASTE = 2;

    public static function getBadge($label): string
    {
        return match ($label) {
            self::MUST_HAVE => '<span class="badge badge-primary">Must</span>',
            self::NICE_TO_HAVE => '<span class="badge badge-success">Nice</span>',
            self::WASTE => '<span class="badge badge-danger">Waste</span>',
            default => '',
        };
    }

}
