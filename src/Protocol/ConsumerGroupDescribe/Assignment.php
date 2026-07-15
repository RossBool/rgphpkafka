<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ConsumerGroupDescribe;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Assignment extends AbstractStruct
{
    /**
 * The assigned topic-partitions to the member.
 *
 * @var TopicPartitions[]
 */
protected $topicPartitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicPartitions', TopicPartitions::class, true, [0,1], [0,1], [], [], null),

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
 * @return TopicPartitions[]
 */
public function getTopicPartitions(): array
{
    return $this->topicPartitions;
}

/**
 * @param TopicPartitions[] $topicPartitions
 *
 * @return self
 */
public function setTopicPartitions(array $topicPartitions): self
{
    $this->topicPartitions = $topicPartitions;

    return $this;
}

}