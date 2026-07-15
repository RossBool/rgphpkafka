<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareFetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AcknowledgementBatch extends AbstractStruct
{
    /**
 * First offset of batch of records to acknowledge.
 *
 * @var int
 */
protected $firstOffset = 0;

/**
 * Last offset (inclusive) of batch of records to acknowledge.
 *
 * @var int
 */
protected $lastOffset = 0;

/**
 * Array of acknowledge types - 0:Gap,1:Accept,2:Release,3:Reject,4:Renew.
 *
 * @var int[]
 */
protected $acknowledgeTypes = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('firstOffset', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('lastOffset', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('acknowledgeTypes', 'int8', true, [0,1,2], [0,1,2], [], [], null),

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
 * @return int[]
 */
public function getAcknowledgeTypes(): array
{
    return $this->acknowledgeTypes;
}

/**
 * @param int[] $acknowledgeTypes
 *
 * @return self
 */
public function setAcknowledgeTypes(array $acknowledgeTypes): self
{
    $this->acknowledgeTypes = $acknowledgeTypes;

    return $this;
}

}