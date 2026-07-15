<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetCommit;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetCommitResponseTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $name = '';

/**
 * The topic ID.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The responses for each partition in the topic.
 *
 * @var OffsetCommitResponsePartition[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [0,1,2,3,4,5,6,7,8,9], [8,9,10], [], [], null),
new ProtocolField('topicId', 'uuid', false, [10], [8,9,10], [], [], null),
new ProtocolField('partitions', OffsetCommitResponsePartition::class, true, [0,1,2,3,4,5,6,7,8,9,10], [8,9,10], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [8,9,10];
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
 * @return OffsetCommitResponsePartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param OffsetCommitResponsePartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}