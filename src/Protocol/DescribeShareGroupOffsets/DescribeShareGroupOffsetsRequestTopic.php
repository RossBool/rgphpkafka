<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class DescribeShareGroupOffsetsRequestTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topicName = '';

/**
 * The partitions.
 *
 * @var int[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicName', 'string', false, [0,1], [0,1], [], [], null),
new ProtocolField('partitions', 'int32', true, [0,1], [0,1], [], [], null),

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
 * @return int[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param int[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}