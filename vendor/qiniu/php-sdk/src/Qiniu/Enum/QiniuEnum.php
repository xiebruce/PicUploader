<?php

namespace Qiniu\Enum;

use MyCLabs\Enum\Enum;

/**
 * 扩展 MyCLabs\Enum\Enum 以使用其新版本的 from 方法
 *
 * @link https://github.com/myclabs/php-enum
 */
abstract class QiniuEnum extends Enum
{
    /**
     * @param mixed $value
     * @return static
     */
    public static function from($value)
    {
        $key = self::assertValidValueReturningKey($value);

        return self::__callStatic($key, array());
    }

    /**
     * Asserts valid enum value
     *
     * @psalm-pure
     * @psalm-assert T $value
     * @param mixed $value
     * @return string
     */
    private static function assertValidValueReturningKey($value)
    {
        if (false === ($key = self::search($value))) {
            throw new \UnexpectedValueException("Value '$value' is not part of the enum " . __CLASS__);
        }

        return $key;
    }
}
