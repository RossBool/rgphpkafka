<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\EndQuorumEpoch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopicData extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topicName = '';

/**
 * The partition data.
 *
 * @var PartitionData[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicName', 'string', false, [0,1], [1], [], [], null),
new ProtocolField('partitions', PartitionData::class, true, [0,1], [1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [1];
}


    /**
 * @return string
 */
public function getTopicName(): string
{
    return $this->topicName;
}

/**
 * @param string $topicName
 *
 * @return self
 */
public function setTopicName(string $topicName): self
{
    $this->topicName = $topicName;

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