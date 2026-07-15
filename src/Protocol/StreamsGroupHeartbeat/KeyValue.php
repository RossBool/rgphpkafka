<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\StreamsGroupHeartbeat;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class KeyValue extends AbstractStruct
{
    /**
 * key of the config
 *
 * @var string
 */
protected $key = '';

/**
 * value of the config
 *
 * @var string
 */
protected $value = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('key', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('value', 'string', false, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
}


    /**
 * @return string
 */
public function getKey(): string
{
    return $this->key;
}

/**
 * @param string $key
 *
 * @return self
 */
public function setKey(string $key): self
{
    $this->key = $key;

    return $this;
}
/**
 * @return string
 */
public function getValue(): string
{
    return $this->value;
}

/**
 * @param string $value
 *
 * @return self
 */
public function setValue(string $value): self
{
    $this->value = $value;

    return $this;
}

}