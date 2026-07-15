<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class FetchPartition extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partition = 0;

/**
 * The current leader epoch of the partition.
 *
 * @var int
 */
protected $currentLeaderEpoch = -1;

/**
 * The message offset.
 *
 * @var int
 */
protected $fetchOffset = 0;

/**
 * The epoch of the last fetched record or -1 if there is none.
 *
 * @var int
 */
protected $lastFetchedEpoch = -1;

/**
 * The earliest available offset of the follower replica.  The field is only used when the request is sent by the follower.
 *
 * @var int
 */
protected $logStartOffset = -1;

/**
 * The maximum bytes to fetch from this partition.  See KIP-74 for cases where this limit may not be honored.
 *
 * @var int
 */
protected $partitionMaxBytes = 0;

/**
 * The directory id of the follower fetching.
 *
 * @var string
 */
protected $replicaDirectoryId = '';

/**
 * The high-watermark known by the replica. -1 if the high-watermark is not known and 9223372036854775807 if the feature is not supported.
 *
 * @var int
 */
protected $highWatermark = 9223372036854775807;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partition', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('currentLeaderEpoch', 'int32', false, [9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('fetchOffset', 'int64', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('lastFetchedEpoch', 'int32', false, [12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('logStartOffset', 'int64', false, [5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('partitionMaxBytes', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('replicaDirectoryId', 'uuid', false, [17,18], [12,13,14,15,16,17,18], [], [17,18], 0),
new ProtocolField('highWatermark', 'int64', false, [18], [12,13,14,15,16,17,18], [], [18], 1),

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
public function getFetchOffset(): int
{
    return $this->fetchOffset;
}

/**
 * @param int $fetchOffset
 *
 * @return self
 */
public function setFetchOffset(int $fetchOffset): self
{
    $this->fetchOffset = $fetchOffset;

    return $this;
}
/**
 * @return int
 */
public function getLastFetchedEpoch(): int
{
    return $this->lastFetchedEpoch;
}

/**
 * @param int $lastFetchedEpoch
 *
 * @return self
 */
public function setLastFetchedEpoch(int $lastFetchedEpoch): self
{
    $this->lastFetchedEpoch = $lastFetchedEpoch;

    return $this;
}
/**
 * @return int
 */
public function getLogStartOffset(): int
{
    return $this->logStartOffset;
}

/**
 * @param int $logStartOffset
 *
 * @return self
 */
public function setLogStartOffset(int $logStartOffset): self
{
    $this->logStartOffset = $logStartOffset;

    return $this;
}
/**
 * @return int
 */
public function getPartitionMaxBytes(): int
{
    return $this->partitionMaxBytes;
}

/**
 * @param int $partitionMaxBytes
 *
 * @return self
 */
public function setPartitionMaxBytes(int $partitionMaxBytes): self
{
    $this->partitionMaxBytes = $partitionMaxBytes;

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

}