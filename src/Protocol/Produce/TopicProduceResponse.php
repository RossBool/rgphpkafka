<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Produce;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopicProduceResponse extends AbstractStruct
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
 * Each partition that we produced to within the topic.
 *
 * @var PartitionProduceResponse[]
 */
protected $partitionResponses = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),
new ProtocolField('topicId', 'uuid', false, [], [9,10,11,12], [], [], null),
new ProtocolField('partitionResponses', PartitionProduceResponse::class, true, [0,1,2,3,4,5,6,7,8,9,10,11,12], [9,10,11,12], [], [], null),

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
 * @return PartitionProduceResponse[]
 */
public function getPartitionResponses(): array
{
    return $this->partitionResponses;
}

/**
 * @param PartitionProduceResponse[] $partitionResponses
 *
 * @return self
 */
public function setPartitionResponses(array $partitionResponses): self
{
    $this->partitionResponses = $partitionResponses;

    return $this;
}

}