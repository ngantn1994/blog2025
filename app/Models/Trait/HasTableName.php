<?php declare(strict_types=1);

namespace App\Models\Trait;

trait HasTableName
{
    public static function getTableName(): string
    {
        return self::$TABLE_NAME;
    }
}

