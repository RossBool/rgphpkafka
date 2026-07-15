<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Metadata;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class MetadataResponsePartition extends AbstractStruct
{
    /**
 * The partition error, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The ID of the leader broker.
 *
 * @var int
 */
protected $leaderId = 0;

/**
 * The leader epoch of this partition.
 *
 * @var int
 */
protected $leaderEpoch = -1;

/**
 * The set of all nodes that host this partition.
 *
 * @var int[]
 */
protected $replicaNodes = [];

/**
 * The set of nodes that are in sync with the leader for this partition.
 *
 * @var int[]
 */
protected $isrNodes = [];

/**
 * The set of offline replicas of this partition.
 *
 * @var int[]
 */
protected $offlineReplicas = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('partitionIndex', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('leaderId', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('replicaNodes', 'int32', true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('isrNodes', 'int32', true, [0,1,2,3,4,5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),
new ProtocolField('offlineReplicas', 'int32', true, [5,6,7,8,9,10,11,12,13], [9,10,11,12,13], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [9,10,11,12,13];
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
 * @return int[]
 */
public function getReplicaNodes(): array
{
    return $this->replicaNodes;
}

/**
 * @param int[] $replicaNodes
 *
 * @return self
 */
public function setReplicaNodes(array $replicaNodes): self
{
    $this->replicaNodes = $replicaNodes;

    return $this;
}
/**
 * @return int[]
 */
public function getIsrNodes(): array
{
    return $this->isrNodes;
}

/**
 * @param int[] $isrNodes
 *
 * @return self
 */
public function setIsrNodes(array $isrNodes): self
{
    $this->isrNodes = $isrNodes;

    return $this;
}
/**
 * @return int[]
 */
public function getOfflineReplicas(): array
{
    return $this->offlineReplicas;
}

/**
 * @param int[] $offlineReplicas
 *
 * @return self
 */
public function setOfflineReplicas(array $offlineReplicas): self
{
    $this->offlineReplicas = $offlineReplicas;

    return $this;
}

}