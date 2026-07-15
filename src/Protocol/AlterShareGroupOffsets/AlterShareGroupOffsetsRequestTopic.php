<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol\AlterShareGroupOffsets;

use longlang\phpkafka\Protocol\AbstractStruct;
use longlang\phpkafka\Protocol\ProtocolField;

class AlterShareGroupOffsetsRequestTopic extends AbstractStruct
{
    /**
 * The topic name.
 *
 * @var string
 */
protected $topicName = '';

/**
 * Each partition to alter offsets for.
 *
 * @var AlterShareGroupOffsetsRequestPartition[]
 */
protected $partitions = [];



    public function __construct()
{
    if (!isset(self::$maps[self::class])) {
        self::$maps[self::class] = [
            new ProtocolField('topicName', 'string', false, [0], [0], [], [], null),
new ProtocolField('partitions', AlterShareGroupOffsetsRequestPartition::class, true, [0], [0], [], [], null),

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
 * @return AlterShareGroupOffsetsRequestPartition[]
 */
public function getPartitions(): array
{
    return $this->partitions;
}

/**
 * @param AlterShareGroupOffsetsRequestPartition[] $partitions
 *
 * @return self
 */
public function setPartitions(array $partitions): self
{
    $this->partitions = $partitions;

    return $this;
}

}