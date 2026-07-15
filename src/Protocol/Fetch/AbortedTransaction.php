<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AbortedTransaction extends AbstractStruct
{
    /**
 * The producer id associated with the aborted transaction.
 *
 * @var int
 */
protected $producerId = 0;

/**
 * The first offset in the aborted transaction.
 *
 * @var int
 */
protected $firstOffset = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('producerId', 'int64', false, [4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('firstOffset', 'int64', false, [4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [12,13,14,15,16,17,18];
}


    /**
 * @return int
 */
public function getProducerId(): int
{
    return $this->producerId;
}

/**
 * @param int $producerId
 *
 * @return self
 */
public function setProducerId(int $producerId): self
{
    $this->producerId = $producerId;

    return $this;
}
/**
 * @return int
 */
public function getFirstOffset(): int
{
    return $this->firstOffset;
}

/**
 * @param int $firstOffset
 *
 * @return self
 */
public function setFirstOffset(int $firstOffset): self
{
    $this->firstOffset = $firstOffset;

    return $this;
}

}