<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\InitializeShareGroupState;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionData extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partition = 0;

/**
 * The state epoch for this share-partition.
 *
 * @var int
 */
protected $stateEpoch = 0;

/**
 * The share-partition start offset, or -1 if the start offset is not being initialized.
 *
 * @var int
 */
protected $startOffset = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partition', 'int32', false, [0], [0], [], [], null),
new ProtocolField('stateEpoch', 'int32', false, [0], [0], [], [], null),
new ProtocolField('startOffset', 'int64', false, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return int
 */
public function getPartition(): int
{
    return $this->partition;
}

/**
 * @param int $partition
 *
 * @return self
 */
public function setPartition(int $partition): self
{
    $this->partition = $partition;

    return $this;
}
/**
 * @return int
 */
public function getStateEpoch(): int
{
    return $this->stateEpoch;
}

/**
 * @param int $stateEpoch
 *
 * @return self
 */
public function setStateEpoch(int $stateEpoch): self
{
    $this->stateEpoch = $stateEpoch;

    return $this;
}
/**
 * @return int
 */
public function getStartOffset(): int
{
    return $this->startOffset;
}

/**
 * @param int $startOffset
 *
 * @return self
 */
public function setStartOffset(int $startOffset): self
{
    $this->startOffset = $startOffset;

    return $this;
}

}