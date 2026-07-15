<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTransactions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class TopicData extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topic = '';

/**
 * The partition ids included in the current transaction.
 *
 * @var int[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topic', 'string', false, [0], [0], [], [], null),
new ProtocolField('partitions', 'int32', true, [0], [0], [], [], null),

        ];
        self::$taggedFieldses[self::class] = [
            
        ];
    }
}
public function getFlexibleVersions(): array
{
    return [0];
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