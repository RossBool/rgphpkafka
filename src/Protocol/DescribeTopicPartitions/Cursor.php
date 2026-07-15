<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\DescribeTopicPartitions;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class Cursor extends AbstractStruct
{
    /**
 * The name for the first topic to process.
 *
 * @var string
 */
protected $topicName = '';

/**
 * The partition index to start with.
 *
 * @var int
 */
protected $partitionIndex = 0;



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicName', 'string', false, [0], [0], [], [], null),
new ProtocolField('partitionIndex', 'int32', false, [0], [0], [], [], null),

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
 * @return int
 */
public function getPartitionIndex(): int
{
    return $this->partitionIndex;
}

/**
 * @param int $partitionIndex
 *
 * @return self
 */
public function setPartitionIndex(int $partitionIndex): self
{
    $this->partitionIndex = $partitionIndex;

    return $this;
}

}