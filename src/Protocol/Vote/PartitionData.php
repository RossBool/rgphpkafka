<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Vote;

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
 * The epoch of the voter sending the request
 *
 * @var int
 */
protected $replicaEpoch = 0;

/**
 * The replica id of the voter sending the request
 *
 * @var int
 */
protected $replicaId = 0;

/**
 * The directory id of the voter sending the request
 *
 * @var string
 */
protected $replicaDirectoryId = '';

/**
 * The directory id of the voter receiving the request
 *
 * @var string
 */
protected $voterDirectoryId = '';

/**
 * The epoch of the last record written to the metadata log.
 *
 * @var int
 */
protected $lastOffsetEpoch = 0;

/**
 * The log end offset of the metadata log of the voter sending the request.
 *
 * @var int
 */
protected $lastOffset = 0;

/**
 * Whether the request is a PreVote request (not persisted) or not.
 *
 * @var bool
 */
protected $preVote = false;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('replicaEpoch', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('replicaId', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('replicaDirectoryId', 'uuid', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('voterDirectoryId', 'uuid', false, [1,2], [0,1,2], [], [], null),
new ProtocolField('lastOffsetEpoch', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('lastOffset', 'int64', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('preVote', 'bool', false, [2], [0,1,2], [], [], null),

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
public function getReplicaEpoch(): int
{
    return $this->replicaEpoch;
}

/**
 * @param int $replicaEpoch
 *
 * @return self
 */
public function setReplicaEpoch(int $replicaEpoch): self
{
    $this->replicaEpoch = $replicaEpoch;

    return $this;
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
 * @return string
 */
public function getVoterDirectoryId(): string
{
    return $this->voterDirectoryId;
}

/**
 * @param string $voterDirectoryId
 *
 * @return self
 */
public function setVoterDirectoryId(string $voterDirectoryId): self
{
    $this->voterDirectoryId = $voterDirectoryId;

    return $this;
}
/**
 * @return int
 */
public function getLastOffsetEpoch(): int
{
    return $this->lastOffsetEpoch;
}

/**
 * @param int $lastOffsetEpoch
 *
 * @return self
 */
public function setLastOffsetEpoch(int $lastOffsetEpoch): self
{
    $this->lastOffsetEpoch = $lastOffsetEpoch;

    return $this;
}
/**
 * @return int
 */
public function getLastOffset(): int
{
    return $this->lastOffset;
}

/**
 * @param int $lastOffset
 *
 * @return self
 */
public function setLastOffset(int $lastOffset): self
{
    $this->lastOffset = $lastOffset;

    return $this;
}
/**
 * @return bool
 */
public function getPreVote(): bool
{
    return $this->preVote;
}

/**
 * @param bool $preVote
 *
 * @return self
 */
public function setPreVote(bool $preVote): self
{
    $this->preVote = $preVote;

    return $this;
}

}