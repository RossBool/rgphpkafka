<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\Fetch;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ForgottenTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topic = '';

/**
 * The unique topic ID.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The partitions indexes to forget.
 *
 * @var int[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topic', 'string', false, [7,8,9,10,11,12], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('topicId', 'uuid', false, [13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),
new ProtocolField('partitions', 'int32', true, [7,8,9,10,11,12,13,14,15,16,17,18], [12,13,14,15,16,17,18], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [12,13,14,15,16,17,18];
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