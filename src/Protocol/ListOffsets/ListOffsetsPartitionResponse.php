<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ListOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ListOffsetsPartitionResponse extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The partition error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;

/**
 * The timestamp associated with the returned offset.
 *
 * @var int
 */
protected $timestamp = -1;

/**
 * The returned offset.
 *
 * @var int
 */
protected $offset = -1;

/**
 * The leader epoch associated with the returned offset.
 *
 * @var int
 */
protected $leaderEpoch = -1;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0,1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('timestamp', 'int64', false, [1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('offset', 'int64', false, [1,2,3,4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),
new ProtocolField('leaderEpoch', 'int32', false, [4,5,6,7,8,9,10,11], [6,7,8,9,10,11], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9,10,11];
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
 * @return int
 */
public function getTimestamp(): int
{
    return $this->timestamp;
}

/**
 * @param int $timestamp
 *
 * @return self
 */
public function setTimestamp(int $timestamp): self
{
    $this->timestamp = $timestamp;

    return $this;
}
/**
 * @return int
 */
public function getOffset(): int
{
    return $this->offset;
}

/**
 * @param int $offset
 *
 * @return self
 */
public function setOffset(int $offset): self
{
    $this->offset = $offset;

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

}