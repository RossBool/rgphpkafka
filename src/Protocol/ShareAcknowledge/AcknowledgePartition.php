<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ShareAcknowledge;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AcknowledgePartition extends AbstractStruct
{
    /**
 * The partition index.
 *
 * @var int
 */
protected $partitionIndex = 0;

/**
 * Record batches to acknowledge.
 *
 * @var AcknowledgementBatch[]
 */
protected $acknowledgementBatches = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('partitionIndex', 'int32', false, [0,1,2], [0,1,2], [], [], null),
new ProtocolField('acknowledgementBatches', AcknowledgementBatch::class, true, [0,1,2], [0,1,2], [], [], null),

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
 * @return AcknowledgementBatch[]
 */
public function getAcknowledgementBatches(): array
{
    return $this->acknowledgementBatches;
}

/**
 * @param AcknowledgementBatch[] $acknowledgementBatches
 *
 * @return self
 */
public function setAcknowledgementBatches(array $acknowledgementBatches): self
{
    $this->acknowledgementBatches = $acknowledgementBatches;

    return $this;
}

}