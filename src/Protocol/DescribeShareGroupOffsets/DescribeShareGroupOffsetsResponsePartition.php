<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeShareGroupOffsetsResponsePartition extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The share-partition start offset.
 *
 * @var int
 */
protected $startOffset = 0;

/**
 * The leader epoch of the partition.
 *
 * @var int
 */
protected $leaderEpoch = 0;

/**
 * The share-partition lag.
 *
 * @var int
 */
protected $lag = -1;

/**
 * The partition-level error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The partition-level error message, or null if there was no error.
 *
 * @var string|null
 */
protected $errorMessage = null;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('startOffset', 'int64', false, [0,1], [0,1], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [0,1], [0,1], [], [], null),
new ProtocolField('lag', 'int64', false, [1], [0,1], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1], [0,1], [], [], null),
new ProtocolField('errorMessage', 'string', false, [0,1], [0,1], [0,1], [], null),

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
public function getStartOffset(): int
{
    return $this->startOffset;
}

/**
 * @param int $startOffset
 *
 * @return self
 */
public function setStartOffset(int $startOffset): self
{
    $this->startOffset = $startOffset;

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
public function getLag(): int
{
    return $this->lag;
}

/**
 * @param int $lag
 *
 * @return self
 */
public function setLag(int $lag): self
{
    $this->lag = $lag;

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

}