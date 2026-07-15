<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\WriteTxnMarkers;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class WritableTxnMarkerTopicResult extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The results by partition.
 *
 * @var WritableTxnMarkerPartitionResult[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2], [1,2], [], [], null),
new ProtocolField('partitions', WritableTxnMarkerPartitionResult::class, true, [0,1,2], [1,2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [1,2];
}


    /**
 * @return string
 */
public function getName(): string
{
    return $this->name;
}

/**
 * @param string $name
 *
 * @return self
 */
public function setName(string $name): self
{
    $this->name = $name;

    return $this;
}
/**
 * @return WritableTxnMarkerPartitionResult[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param WritableTxnMarkerPartitionResult[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}