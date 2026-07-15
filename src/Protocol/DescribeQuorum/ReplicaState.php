<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeQuorum;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ReplicaState extends AbstractStruct
{
    /**
 * The ID of the replica.
 *
 * @var int
 */
protected $replicaId = 0;

/**
 * The replica directory ID of the replica.
 *
 * @var string
 */
protected $replicaDirectoryId = '';

/**
 * The last known log end offset of the follower or -1 if it is unknown.
 *
 * @var int
 */
protected $logEndOffset = 0;

/**
 * The last known leader wall clock time time when a follower fetched from the leader. This is reported as -1 both for the current leader or if it is unknown for a voter.
 *
 * @var int
 */
protected $lastFetchTimestamp = -1;

/**
 * The leader wall clock append time of the offset for which the follower made the most recent fetch request. This is reported as the current time for the leader and -1 if unknown for a voter.
 *
 * @var int
 */
protected $lastCaughtUpTimestamp = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('replicaId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('replicaDirectoryId', 'uuid', false, [2], [0,1,2], [], [], null),
new ProtocolField('logEndOffset', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('lastFetchTimestamp', 'int64', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('lastCaughtUpTimestamp', 'int64', false, [1,2], [0,1,2], [], [], null),

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
public function getReplicaId(): int
{
    return $this->replicaId;
}

/**
 * @param int $replicaId
 *
 * @return self
 */
public function setReplicaId(int $replicaId): self
{
    $this->replicaId = $replicaId;

    return $this;
}
/**
 * @return string
 */
public function getReplicaDirectoryId(): string
{
    return $this->replicaDirectoryId;
}

/**
 * @param string $replicaDirectoryId
 *
 * @return self
 */
public function setReplicaDirectoryId(string $replicaDirectoryId): self
{
    $this->replicaDirectoryId = $replicaDirectoryId;

    return $this;
}
/**
 * @return int
 */
public function getLogEndOffset(): int
{
    return $this->logEndOffset;
}

/**
 * @param int $logEndOffset
 *
 * @return self
 */
public function setLogEndOffset(int $logEndOffset): self
{
    $this->logEndOffset = $logEndOffset;

    return $this;
}
/**
 * @return int
 */
public function getLastFetchTimestamp(): int
{
    return $this->lastFetchTimestamp;
}

/**
 * @param int $lastFetchTimestamp
 *
 * @return self
 */
public function setLastFetchTimestamp(int $lastFetchTimestamp): self
{
    $this->lastFetchTimestamp = $lastFetchTimestamp;

    return $this;
}
/**
 * @return int
 */
public function getLastCaughtUpTimestamp(): int
{
    return $this->lastCaughtUpTimestamp;
}

/**
 * @param int $lastCaughtUpTimestamp
 *
 * @return self
 */
public function setLastCaughtUpTimestamp(int $lastCaughtUpTimestamp): self
{
    $this->lastCaughtUpTimestamp = $lastCaughtUpTimestamp;

    return $this;
}

}