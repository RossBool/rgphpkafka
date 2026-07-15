<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterPartition;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionData extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The leader epoch of this partition.
 *
 * @var int
 */
protected $leaderEpoch = 0;

/**
 * The ISR for this partition. Deprecated since version 3.
 *
 * @var int[]
 */
protected $newIsr = [];

/**
 * The ISR for this partition.
 *
 * @var BrokerState[]
 */
protected $newIsrWithEpochs = [];

/**
 * 1 if the partition is recovering from an unclean leader election; 0 otherwise.
 *
 * @var int
 */
protected $leaderRecoveryState = 0;

/**
 * The expected epoch of the partition which is being updated.
 *
 * @var int
 */
protected $partitionEpoch = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2,3], [0,1,2,3], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0,1,2,3], [0,1,2,3], [], [], null),
new ProtocolField('newIsr', 'int32', true, [0,1,2], [0,1,2,3], [], [], null),
new ProtocolField('newIsrWithEpochs', BrokerState::class, true, [3], [0,1,2,3], [], [], null),
new ProtocolField('leaderRecoveryState', 'int8', false, [1,2,3], [0,1,2,3], [], [], null),
new ProtocolField('partitionEpoch', 'int32', false, [0,1,2,3], [0,1,2,3], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1,2,3];
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
/**
 * @return int[]
 */
public function getNewIsr(): array
{
    return $this->newIsr;
}

/**
 * @param int[] $newIsr
 *
 * @return self
 */
public function setNewIsr(array $newIsr): self
{
    $this->newIsr = $newIsr;

    return $this;
}
/**
 * @return BrokerState[]
 */
public function getNewIsrWithEpochs(): array
{
    return $this->newIsrWithEpochs;
}

/**
 * @param BrokerState[] $newIsrWithEpochs
 *
 * @return self
 */
public function setNewIsrWithEpochs(array $newIsrWithEpochs): self
{
    $this->newIsrWithEpochs = $newIsrWithEpochs;

    return $this;
}
/**
 * @return int
 */
public function getLeaderRecoveryState(): int
{
    return $this->leaderRecoveryState;
}

/**
 * @param int $leaderRecoveryState
 *
 * @return self
 */
public function setLeaderRecoveryState(int $leaderRecoveryState): self
{
    $this->leaderRecoveryState = $leaderRecoveryState;

    return $this;
}
/**
 * @return int
 */
public function getPartitionEpoch(): int
{
    return $this->partitionEpoch;
}

/**
 * @param int $partitionEpoch
 *
 * @return self
 */
public function setPartitionEpoch(int $partitionEpoch): self
{
    $this->partitionEpoch = $partitionEpoch;

    return $this;
}

}