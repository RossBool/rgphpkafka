<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetForLeaderEpoch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class EpochEndOffset extends AbstractStruct
{
    /**
 * The error code 0, or if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The partition index.
 *
 * @var int
 */
protected $partition = 0;

/**
 * The leader epoch of the partition.
 *
 * @var int
 */
protected $leaderEpoch = -1;

/**
 * The end offset of the epoch.
 *
 * @var int
 */
protected $endOffset = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4], [4], [], [], null),
new ProtocolField('partition', 'int32', false, [0,1,2,3,4], [4], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [1,2,3,4], [4], [], [], null),
new ProtocolField('endOffset', 'int64', false, [0,1,2,3,4], [4], [], [], null),

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
public function getEndOffset(): int
{
    return $this->endOffset;
}

/**
 * @param int $endOffset
 *
 * @return self
 */
public function setEndOffset(int $endOffset): self
{
    $this->endOffset = $endOffset;

    return $this;
}

}