<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Type;

/**
 * uuid type: 128-bit identifier, transmitted as 16 raw bytes (big-endian).
 * Used in newer Kafka protocols for TopicId, directory ids, voter ids, etc.
 * Represented in PHP as a 32-char hexadecimal string.
 */
class Uuid extends AbstractType
{
    private function __construct()
    {
    }

    public static function pack(string $value): string
    {
        // Empty string means "no uuid set" — serialize as 16 zero bytes
        // so that default-valued structs can always pack without error.
        if ('' === $value) {
            return str_repeat("\x00", 16);
        }
        // Accept either a 32-char hex string or a 16-byte binary string.
        if (32 === strlen($value)) {
            $hex = str_replace('-', '', $value);
            $binary = @hex2bin($hex);
            if (false === $binary || 16 !== strlen($binary)) {
                throw new \InvalidArgumentException(sprintf('Invalid UUID hex: %s', $value));
            }

            return $binary;
        }
        if (16 === strlen($value)) {
            return $value;
        }
        throw new \InvalidArgumentException(sprintf('UUID must be 16-byte binary or 32-char hex, got %d bytes', strlen($value)));
    }

    public static function unpack(string $value, ?int & $size = null): string
    {
        $size = 16;
        // Return as 32-char lowercase hex string for readability/interoperability
        return bin2hex(substr($value, 0, 16));
    }
}
