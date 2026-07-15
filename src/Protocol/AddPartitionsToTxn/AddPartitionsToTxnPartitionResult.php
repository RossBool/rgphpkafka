<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AddPartitionsToTxn;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AddPartitionsToTxnPartitionResult extends AbstractStruct
{
    /**
 * The partition indexes.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * The response error code.
 *
 * @var int
 */
protected $partitionErrorCode = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2,3,4,5], [3,4,5], [], [], null),
new ProtocolField('partitionErrorCode', 'int16', false, [0,1,2,3,4,5], [3,4,5], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [3,4,5];
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
public function getPartitionErrorCode(): int
{
    return $this->partitionErrorCode;
}

/**
 * @param int $partitionErrorCode
 *
 * @return self
 */
public function setPartitionErrorCode(int $partitionErrorCode): self
{
    $this->partitionErrorCode = $partitionErrorCode;

    return $this;
}

}