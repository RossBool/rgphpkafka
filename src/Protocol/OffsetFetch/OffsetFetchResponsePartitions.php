<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetFetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetFetchResponsePartitions extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The committed message offset.
 *
 * @var int
 */
protected $committedOffset = 0;

/**
 * The leader epoch.
 *
 * @var int
 */
protected $committedLeaderEpoch = -1;

/**
 * The partition metadata.
 *
 * @var string|null
 */
protected $metadata = null;

/**
 * The partition-level error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [8,9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('committedOffset', 'int64', false, [8,9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('committedLeaderEpoch', 'int32', false, [8,9,10], [6,7,8,9,10], [], [], null),
new ProtocolField('metadata', 'string', false, [8,9,10], [6,7,8,9,10], [8,9,10], [], null),
new ProtocolField('errorCode', 'int16', false, [8,9,10], [6,7,8,9,10], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9,10];
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
public function getCommittedOffset(): int
{
    return $this->committedOffset;
}

/**
 * @param int $committedOffset
 *
 * @return self
 */
public function setCommittedOffset(int $committedOffset): self
{
    $this->committedOffset = $committedOffset;

    return $this;
}
/**
 * @return int
 */
public function getCommittedLeaderEpoch(): int
{
    return $this->committedLeaderEpoch;
}

/**
 * @param int $committedLeaderEpoch
 *
 * @return self
 */
public function setCommittedLeaderEpoch(int $committedLeaderEpoch): self
{
    $this->committedLeaderEpoch = $committedLeaderEpoch;

    return $this;
}
/**
 * @return string|null
 */
public function getMetadata(): ?string
{
    return $this->metadata;
}

/**
 * @param string|null $metadata
 *
 * @return self
 */
public function setMetadata(?string $metadata): self
{
    $this->metadata = $metadata;

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

}