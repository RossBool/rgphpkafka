<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ElectLeaders;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopicPartitions extends AbstractStruct
{
    /**
 * The name of a topic.
 *
 * @var string
 */
protected $topic = '';

/**
 * The partitions of this topic whose leader should be elected.
 *
 * @var int[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topic', 'string', false, [0,1,2], [2], [], [], null),
new ProtocolField('partitions', 'int32', true, [0,1,2], [2], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [2];
}


    /**
 * @return string
 */
public function getTopic(): string
{
    return $this->topic;
}

/**
 * @param string $topic
 *
 * @return self
 */
public function setTopic(string $topic): self
{
    $this->topic = $topic;

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