<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FindCoordinator;

use longlang\phpkafka\Protocol\AbstractRequest;
use longlang\phpkafka\Protocol\ProtocolField;

class FindCoordinatorRequest extends AbstractRequest
{
    /**
 * The coordinator key.
 *
 * @var string
 */
protected $key = '';

/**
 * The coordinator key type. (group, transaction, share).
 *
 * @var int
 */
protected $keyType = 0;

/**
 * The coordinator keys.
 *
 * @var string[]
 */
protected $coordinatorKeys = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('key', 'string', false, [0,1,2,3], [3,4,5,6], [], [], null),
new ProtocolField('keyType', 'int8', false, [1,2,3,4,5,6], [3,4,5,6], [], [], null),
new ProtocolField('coordinatorKeys', 'string', true, [4,5,6], [3,4,5,6], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getRequestApiKey(): ?int
{
    return 10;
}

public function getMaxSupportedVersion(): int
{
    return 6;
}

public function getFlexibleVersions(): array
{
    return [3,4,5,6];
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
 * @return int
 */
public function getKeyType(): int
{
    return $this->keyType;
}

/**
 * @param int $keyType
 *
 * @return self
 */
public function setKeyType(int $keyType): self
{
    $this->keyType = $keyType;

    return $this;
}
/**
 * @return string[]
 */
public function getCoordinatorKeys(): array
{
    return $this->coordinatorKeys;
}

/**
 * @param string[] $coordinatorKeys
 *
 * @return self
 */
public function setCoordinatorKeys(array $coordinatorKeys): self
{
    $this->coordinatorKeys = $coordinatorKeys;

    return $this;
}

}