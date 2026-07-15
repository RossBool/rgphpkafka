<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ListOffsetsPartition extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The current leader epoch.
 *
 * @var int
 */
protected $currentLeaderEpoch = -1;

/**
 * The current timestamp.
 *
 * @var int
 */
protected $timestamp = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('currentLeaderEpoch', 'int32', false, [4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('timestamp', 'int64', false, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9,10,11];
}


    /**
 * @return int
 */
public function getPartitionIndex(): int
{
    return $this->partitionIndex;
}

/**
 * @param int $partitionIndex
 *
 * @return self
 */
public function setPartitionIndex(int $partitionIndex): self
{
    $this->partitionIndex = $partitionIndex;

    return $this;
}
/**
 * @return int
 */
public function getCurrentLeaderEpoch(): int
{
    return $this->currentLeaderEpoch;
}

/**
 * @param int $currentLeaderEpoch
 *
 * @return self
 */
public function setCurrentLeaderEpoch(int $currentLeaderEpoch): self
{
    $this->currentLeaderEpoch = $currentLeaderEpoch;

    return $this;
}
/**
 * @return int
 */
public function getTimestamp(): int
{
    return $this->timestamp;
}

/**
 * @param int $timestamp
 *
 * @return self
 */
public function setTimestamp(int $timestamp): self
{
    $this->timestamp = $timestamp;

    return $this;
}

}