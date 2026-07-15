<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetForLeaderEpoch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetForLeaderPartition extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partition = 0;

/**
 * An epoch used to fence consumers/replicas with old metadata. If the epoch provided by the client is larger than the current epoch known to the broker, then the UNKNOWN_LEADER_EPOCH error code will be returned. If the provided epoch is smaller, then the FENCED_LEADER_EPOCH error code will be returned.
 *
 * @var int
 */
protected $currentLeaderEpoch = -1;

/**
 * The epoch to look up an offset for.
 *
 * @var int
 */
protected $leaderEpoch = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partition', 'int32', false, [0,1,2,3,4], [4], [], [], null),
new ProtocolField('currentLeaderEpoch', 'int32', false, [2,3,4], [4], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0,1,2,3,4], [4], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [4];
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