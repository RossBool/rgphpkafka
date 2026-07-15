<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeShareGroupOffsetsResponseTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topicName = '';

/**
 * The unique topic ID.
 *
 * @var string
 */
protected $topicId = '';

/**
 * 
 *
 * @var DescribeShareGroupOffsetsResponsePartition[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicName', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('topicId', 'uuid', false, [0,1], [0,1], [], [], null),
new ProtocolField('partitions', DescribeShareGroupOffsetsResponsePartition::class, true, [0,1], [0,1], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0,1];
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
 * @return DescribeShareGroupOffsetsResponsePartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param DescribeShareGroupOffsetsResponsePartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}