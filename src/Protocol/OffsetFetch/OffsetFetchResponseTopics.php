<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\OffsetFetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class OffsetFetchResponseTopics extends AbstractStruct
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
 * The responses per partition.
 *
 * @var OffsetFetchResponsePartitions[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('name', 'string', false, [8,9], [6,7,8,9,10], [], [], null),
new ProtocolField('topicId', 'uuid', false, [10], [6,7,8,9,10], [], [], null),
new ProtocolField('partitions', OffsetFetchResponsePartitions::class, true, [8,9,10], [6,7,8,9,10], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [6,7,8,9,10];
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
 * @return OffsetFetchResponsePartitions[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param OffsetFetchResponsePartitions[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}