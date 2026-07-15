<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeQuorum;

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
 * The partition error code.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;

/**
 * The ID of the current leader or -1 if the leader is unknown.
 *
 * @var int
 */
protected $leaderId = 0;

/**
 * The latest known leader epoch.
 *
 * @var int
 */
protected $leaderEpoch = 0;

/**
 * The high water mark.
 *
 * @var int
 */
protected $highWatermark = 0;

/**
 * The current voters of the partition.
 *
 * @var ReplicaState[]
 */
protected $currentVoters = [];

/**
 * The observers of the partition.
 *
 * @var ReplicaState[]
 */
protected $observers = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('errorMessage', 'string', false, [2], [0,1,2], [2], [], null),
new ProtocolField('leaderId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('highWatermark', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('currentVoters', ReplicaState::class, true, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('observers', ReplicaState::class, true, [0,1,2], [0,1,2], [], [], null),

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
public function getErrorCode(): int
{
    return $this->errorCode;
}

/**
 * @param int $errorCode
 *
 * @return self
 */
public function setErrorCode(int $errorCode): self
{
    $this->errorCode = $errorCode;

    return $this;
}
/**
 * @return string|null
 */
public function getErrorMessage(): ?string
{
    return $this->errorMessage;
}

/**
 * @param string|null $errorMessage
 *
 * @return self
 */
public function setErrorMessage(?string $errorMessage): self
{
    $this->errorMessage = $errorMessage;

    return $this;
}
/**
 * @return int
 */
public function getLeaderId(): int
{
    return $this->leaderId;
}

/**
 * @param int $leaderId
 *
 * @return self
 */
public function setLeaderId(int $leaderId): self
{
    $this->leaderId = $leaderId;

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
 * @return int
 */
public function getHighWatermark(): int
{
    return $this->highWatermark;
}

/**
 * @param int $highWatermark
 *
 * @return self
 */
public function setHighWatermark(int $highWatermark): self
{
    $this->highWatermark = $highWatermark;

    return $this;
}
/**
 * @return ReplicaState[]
 */
public function getCurrentVoters(): array
{
    return $this->currentVoters;
}

/**
 * @param ReplicaState[] $currentVoters
 *
 * @return self
 */
public function setCurrentVoters(array $currentVoters): self
{
    $this->currentVoters = $currentVoters;

    return $this;
}
/**
 * @return ReplicaState[]
 */
public function getObservers(): array
{
    return $this->observers;
}

/**
 * @param ReplicaState[] $observers
 *
 * @return self
 */
public function setObservers(array $observers): self
{
    $this->observers = $observers;

    return $this;
}

}