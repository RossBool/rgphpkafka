<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetDelete;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetDeleteResponsePartition extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The error code, or 0 if there was no error.
 *
 * @var int
 */
protected $errorCode = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0], [], [], [], null),
new ProtocolField('errorCode', 'int16', false, [0], [], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [];
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

}