<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareFetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AcquiredRecords extends AbstractStruct
{
    /**
 * The earliest offset in this batch of acquired records.
 *
 * @var int
 */
protected $firstOffset = 0;

/**
 * The last offset of this batch of acquired records.
 *
 * @var int
 */
protected $lastOffset = 0;

/**
 * The delivery count of this batch of acquired records.
 *
 * @var int
 */
protected $deliveryCount = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('firstOffset', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('lastOffset', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('deliveryCount', 'int16', false, [0,1,2], [0,1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2];
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
/**
 * @return int
 */
public function getLastOffset(): int
{
    return $this->lastOffset;
}

/**
 * @param int $lastOffset
 *
 * @return self
 */
public function setLastOffset(int $lastOffset): self
{
    $this->lastOffset = $lastOffset;

    return $this;
}
/**
 * @return int
 */
public function getDeliveryCount(): int
{
    return $this->deliveryCount;
}

/**
 * @param int $deliveryCount
 *
 * @return self
 */
public function setDeliveryCount(int $deliveryCount): self
{
    $this->deliveryCount = $deliveryCount;

    return $this;
}

}