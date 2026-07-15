<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Type;

use InvalidArgumentException;

/**
 * uint16 type: unsigned 16-bit integer, big-endian.
 * Used in newer Kafka protocols (KRaft era) for fields like Port.
 */
class UInt16 extends AbstractType
{
    public const MIN_VALUE = 0;

    public const MAX_VALUE = 65535;

    private function __construct()
    {
    }

    public static function pack(int $value): string
    {
        if ($value < self::MIN_VALUE || $value > self::MAX_VALUE) {
            throw new InvalidArgumentException(sprintf('%s is outside the range of UInt16', $value));
        }
        // 'n' is unsigned big-endian 16-bit, no manual byte-swap needed
        return pack('n', $value);
    }

    public static function unpack(string $value, ?int & $size = null): int
    {
        $size = 2;

        return unpack('n', substr($value, 0, 2))[1];
    }
}
