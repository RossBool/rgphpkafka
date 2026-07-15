<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ReadShareGroupStateSummary;

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
 * The leader epoch of the share-partition.
 *
 * @var int
 */
protected $leaderEpoch = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partition', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0,1], [0,1], [], [], null),

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
public function getLeaderEpoch(): int
{
    return $this->leaderEpoch;
}

/**
 * @param int $leaderEpoch
 *
 * @return self
 */
public function setLeaderEpoch(int $leaderEpoch): self
{
    $this->leaderEpoch = $leaderEpoch;

    return $this;
}

}