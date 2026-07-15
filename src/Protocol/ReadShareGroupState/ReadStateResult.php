<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\ReadShareGroupState;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class ReadStateResult extends AbstractStruct
{
    /**
 * The topic identifier.
 *
 * @var string
 */
protected $topicId = '';

/**
 * The results for the partitions.
 *
 * @var PartitionResult[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicId', 'uuid', false, [0], [0], [], [], null),
new ProtocolField('partitions', PartitionResult::class, true, [0], [0], [], [], null),

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
 * @return PartitionResult[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param PartitionResult[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}