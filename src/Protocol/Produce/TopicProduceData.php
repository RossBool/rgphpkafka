<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Produce;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopicProduceData extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The unique topic ID
 *
 * @var string
 */
protected $topicId = '';

/**
 * Each partition to produce to.
 *
 * @var PartitionProduceData[]
 */
protected $partitionData = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('topicId', 'uuid', false, [], [9,10,11,12], [], [], null),
new ProtocolField('partitionData', PartitionProduceData::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [9,10,11,12];
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
 * @return PartitionProduceData[]
 */
public function getPartitionData(): array
{
    return $this->partitionData;
}

/**
 * @param PartitionProduceData[] $partitionData
 *
 * @return self
 */
public function setPartitionData(array $partitionData): self
{
    $this->partitionData = $partitionData;

    return $this;
}

}