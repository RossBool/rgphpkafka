<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\InitializeShareGroupState;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class InitializeStateData extends AbstractStruct
{
    /**
 * The topic identifier.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The data for the partitions.
 *
 * @var PartitionData[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicId', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('partitions', PartitionData::class, true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
}


    /**
 * @return string
 */
public function getTopicId(): string
{
    return $this->topicId;
}

/**
 * @param string $topicId
 *
 * @return self
 */
public function setTopicId(string $topicId): self
{
    $this->topicId = $topicId;

    return $this;
}
/**
 * @return PartitionData[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param PartitionData[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}