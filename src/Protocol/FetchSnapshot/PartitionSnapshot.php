<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\FetchSnapshot;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class PartitionSnapshot extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partition = 0;

/**
 * The current leader epoch of the partition, -1 for unknown leader epoch.
 *
 * @var int
 */
protected $currentLeaderEpoch = 0;

/**
 * The snapshot endOffset and epoch to fetch.
 *
 * @var SnapshotId
 */
protected $snapshotId = null;

/**
 * The byte position within the snapshot to start fetching from.
 *
 * @var int
 */
protected $position = 0;

/**
 * The directory id of the follower fetching.
 *
 * @var string
 */
protected $replicaDirectoryId = '';



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partition', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('currentLeaderEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('snapshotId', SnapshotId::class, false, [0,1], [0,1], [], [], null),
new ProtocolField('position', 'int64', false, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            new ProtocolField('replicaDirectoryId', 'uuid', false, [1], [0,1], [], [1], 0),

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
 * @return SnapshotId
 */
public function getSnapshotId(): SnapshotId
{
    return $this->snapshotId;
}

/**
 * @param SnapshotId $snapshotId
 *
 * @return self
 */
public function setSnapshotId(SnapshotId $snapshotId): self
{
    $this->snapshotId = $snapshotId;

    return $this;
}
/**
 * @return int
 */
public function getPosition(): int
{
    return $this->position;
}

/**
 * @param int $position
 *
 * @return self
 */
public function setPosition(int $position): self
{
    $this->position = $position;

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

}